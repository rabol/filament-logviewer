<?php

namespace Rabol\FilamentLogviewer\Pages;

use Filament\Pages\Page;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables;

use Jackiedo\LogReader\Facades\LogReader;
use Rabol\FilamentLogviewer\Models\LogFile;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\LinkAction;

class LogViewerPage extends Page implements Tables\Contracts\HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-log-viewer::log-viewer';
    

    public function mount(): void
    {

    }

    protected function getActions(): array
    {
        return [
            
        ];
    }

    public function viewLogFile()
    {

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