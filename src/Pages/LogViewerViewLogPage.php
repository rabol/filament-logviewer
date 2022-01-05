<?php

namespace Rabol\FilamentLogviewer\Pages;

use Closure;
use Filament\Pages\Actions\ButtonAction;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;
use Jackiedo\LogReader\Facades\LogReader;

class LogViewerViewLogPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament-log-viewer::log-viewer-view';
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $title = 'View log file';
    private $logEntries;
    private $log;
    private $fileName;

    public static function getRoutes(): Closure
    {
        return function () {
            $slug = static::getSlug();
            Route::get("{$slug}/{fileName?}", static::class)->name($slug);
        };
    }

    public function mount(string $fileName): void
    {
        $this->log = LogReader::filename($fileName);
        $this->logEntries = $this->log->get(); // we need to paginate...
        self::$title = 'Log file: ' . $fileName;
        $this->fileName = $fileName;
    }

    protected function getActions(): array
    {
        return [
            ButtonAction::make('back')
                ->label('Back')
                ->url(LogViewerPage::getUrl()),
        ];
    }

    protected function getViewData(): array
    {
        return [
            'header' => null,
            'footer' => null,
            'logEntries' => $this->logEntries,
            'log' => $this->log,
            'filename' => $this->fileName,
        ];
    }
}
