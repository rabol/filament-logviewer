<?php

namespace Rabol\FilamentLogviewer\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Illuminate\Database\Eloquent\Builder;
use Rabol\FilamentLogviewer\Models\LogFile;

class LogViewerPage extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer';
    protected static ?string $title = 'Log viewer';
    protected static ?string $navigationLabel = 'Log viewer';

    protected static function getNavigationGroup(): ?string
    {
        return config('filament-log-viewer.navigation_group', null);
    }

    protected function getTableQuery(): Builder
    {
        return LogFile::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\LinkAction::make('viewlogfile')
                ->label('View')
                ->url(function (LogFile $record) {
                    return LogViewerViewLogPage::getUrl(['fileName' => $record->name]);
                })

        ];
    }
}
