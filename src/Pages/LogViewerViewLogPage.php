<?php

namespace Rabol\FilamentLogviewer\Pages;

use Closure;
use Filament\Pages;
use Filament\Tables;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;
use Filament\Tables\Actions\LinkAction;
use Filament\Pages\Actions\ButtonAction;
use Illuminate\Database\Eloquent\Builder;
use Jackiedo\LogReader\Facades\LogReader;
use Rabol\FilamentLogviewer\Models\LogFile;
use Filament\Tables\Concerns\InteractsWithTable;
use Rabol\FilamentLogviewer\Models\LogFileEntry;


class LogViewerViewLogPage extends Page 
{
    private $logEntries;
    private $log;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer-view';
    
    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $title = 'test';
    protected function getActions(): array
    {
        return [
            ButtonAction::make('back')
                ->label('Back')
                ->url(LogViewerPage::getUrl()),
        ];
    }

    public function mount(LogFile $record): void
    {
        $this->log = LogReader::filename($record->name);
        $this->logEntries = $this->log->get(); // we need to paginate...
        self::$title = 'Log file: ' . $record->name;
    }

    protected function getViewData(): array
    {
        return [
            'header' => null,
            'footer' => null,
            'logEntries' => $this->logEntries,
            'log' => $this->log,
        ];
    }
    
    public static function getRoutes(): Closure
    {
        return function () {
            $slug = static::getSlug();
            Route::get("{$slug}/{record?}", static::class)->name($slug);
        };
    }
}