<?php

namespace Rabol\FilamentLogviewer\Models;

use Illuminate\Database\Eloquent\Model;
use Jackiedo\LogReader\Facades\LogReader;
use Sushi\Sushi;

class LogFile extends Model
{
    use Sushi;

    protected $schema = [
        'id' => 'integer',
        'name' => 'string',
        'path' => 'string',
    ];

    public function getRows()
    {
        $logFiles = LogReader::getLogFilenameList();
        $i = 1;
        if ($logFiles) {
            foreach ($logFiles as $key => $value) {
                $rows[] = [
                    'id' => $i++,
                    'name' => $key,
                    'path' => $value,
                ];
            }
        } else {
            $rows = [];
        }

        return $rows;
    }
}
