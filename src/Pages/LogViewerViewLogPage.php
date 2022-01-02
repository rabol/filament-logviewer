<?php

namespace Rabol\FilamentLogviewer\Pages;

use Filament\Tables;
use Filament\Pages\Page;
use Filament\Tables\Actions\LinkAction;

use Filament\Pages;
use Illuminate\Database\Eloquent\Builder;
use Jackiedo\LogReader\Facades\LogReader;
use Rabol\FilamentLogviewer\Models\LogFile;
use Filament\Tables\Concerns\InteractsWithTable;

class LogViewerViewLogPage extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithTable;

    public $record;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer-view';
    

    protected function getActions(): array
    {
        return [
            
        ];
    }

    public function mount(LogFile $record): void
    {
        dd($record);
        //dd($id);
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
            ->action('viewLogFile')
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