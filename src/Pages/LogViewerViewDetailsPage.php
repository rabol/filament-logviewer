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
use stdClass;

class LogViewerViewDetailsPage extends Page
{
    private $recordId;
    private $fileName;
    private $entry;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer-view-details';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $title = 'Log details';
    protected function getActions(): array
    {
        return [
            ButtonAction::make('back')
                ->label('Back')
                ->url(LogViewerViewLogPage::getUrl(['fileName' => $this->fileName])),
        ];
    }

    public function mount(string $recordId, string $fileName): void
    {
        $this->recordId = $recordId;
        $this->fileName = $fileName;

        $this->entry = LogReader::find($recordId);
    }

    protected function getViewData(): array
    {
        return [
            'header' => null, //'Log details: ' . $this->recordId . ' / ' . $this->fileName,
            'footer' => null,
            'recordid' => $this->recordId,
            'filename' => $this->fileName,
            'entry' => $this->entry,
        ];
    }

    public static function getRoutes(): Closure
    {
        return function () {
            $slug = static::getSlug();
            Route::get("{$slug}/{recordId?}/{fileName?}", static::class)->name($slug);
        };
    }
}
