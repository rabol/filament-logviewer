<?php

namespace Rabol\FilamentLogviewer\Pages;

use Closure;
use Filament\Pages;
use Filament\Tables;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;
use Filament\Tables\Actions\LinkAction;
use Illuminate\Database\Eloquent\Builder;
use Jackiedo\LogReader\Facades\LogReader;
use Rabol\FilamentLogviewer\Models\LogFile;
use Filament\Tables\Concerns\InteractsWithTable;
use Illuminate\Filesystem\LockableFile;

class LogViewerPage extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer';
    

    protected function getActions(): array
    {
        return [
            
        ];
    }

    public function viewLogFile($logFile)
    {
        dd($logFile);
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
 
    protected function getTableFilters(): array
    {
        return [];
    }
 
    protected function getTableActions(): array
    {
        return [
                Tables\Actions\LinkAction::make('viewlogfile')
                ->label('View')
                //->url(fn (LogFile $rec): string => LogViewerViewLogPage::getUrl(['rec' => $rec])),
                ->url(function (LogFile $record) {
                    //dd($record);
                    return LogViewerViewLogPage::getUrl(['record' => $record]);
                })
                
               
         
        ];
    }
 
    protected function getTableBulkActions(): array
    {
        return [];
    } 


    protected function getViewData(): array
    {
        return [];
    }

   /*
    public static function getRoutes(): Closure
    {
        return function () {
            $slug = static::getSlug();

            Route::get("{$slug}/{record}", static::class)->name($slug);
        };
    }
*/
}