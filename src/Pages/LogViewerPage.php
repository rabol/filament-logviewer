<?php

namespace Rabol\FilamentLogviewer\Pages;


use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Jackiedo\LogReader\Facades\LogReader;
use Rabol\FilamentLogviewer\Models\LogFile;

class LogViewerPage extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-logviewer::log-viewer';

    protected static ?string $title = 'Log viewer';

    protected static ?string $navigationLabel = 'Log viewer';

    protected static ?string $model = LogFile::class;

    public static function getNavigationGroup(): ?string
    {
        return config('filament-logviewer.navigation_group', null);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
            ])->query(LogFile::query())
            ->actions([
                Tables\Actions\Action::make('viewlogfile')
                    ->label('View')
                    ->url(function (LogFile $record) {
                        return LogViewerViewLogPage::getUrl(['fileName' => $record->name]);
                    }),

                Tables\Actions\Action::make('delete')
                    ->action(fn(LogFile $record) => $this->deleteLogFile($record))
                    ->requiresConfirmation()
                    ->hidden(fn ($record) => ! static::canDelete($record)),
            ]);
    }

    public static function canDelete(Model $record): bool
    {
        return Gate::check('delete', $record);
    }

    public function deleteLogFile(LogFile $record): void
    {
        $log = LogReader::filename($record->name);
        $deleted = $log->delete();
        LogReader::removeLogFile();
        LogFile::boot();

    }
}
