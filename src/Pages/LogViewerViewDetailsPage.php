<?php

namespace Rabol\FilamentLogviewer\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Closure;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;
use Jackiedo\LogReader\Facades\LogReader;

class LogViewerViewDetailsPage extends Page
{
    use HasPageShield;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-logviewer::log-viewer-view-details';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $title = 'Log details';

    private $recordId;

    private $fileName;

    private $entry;

    public static function getRoutes(): Closure
    {
        return function () {
            $slug = static::getSlug();
            Route::get("{$slug}/{recordId?}/{fileName?}", static::class)->name($slug);
        };
    }

    public function mount(): void
    {
        $recordId = request()->query('recordId');
        $fileName = request()->query('fileName');

        $this->recordId = $recordId;
        $this->fileName = $fileName;

        $this->entry = LogReader::find($recordId);
    }

    protected function getActions(): array
    {
        return [
            Action::make('back')
                ->label('Back')
                ->url(LogViewerViewLogPage::getUrl(['fileName' => $this->fileName])),
        ];
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

}
