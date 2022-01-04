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
    protected static ?string $title = 'Log viewer';
    protected static ?string $navigationLabel = 'Log viewer';

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
                ->url(function (LogFile $record) {
                    return LogViewerViewLogPage::getUrl(['fileName' => $record->name]);
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

   
   

}