<x-filament::page>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Log Files - view
            </h2>
        </x-slot>
    <div>

    <div class="">
    <table class="w-full text-left rtl:text-right divide-y table-auto">
    
        <thead>
            <tr class="bg-gray-50">
                <td>Date</td>
                <td>Environment</td>
                <td>Level</td>
                {{--<td>File path</td>--}}
                <td>Context</td>
                <td>Stack trace</td>
            </tr>
        </thead>
    

    <tbody class="divide-y whitespace-nowrap text-sm">
        @if($logEntries)
            @foreach ($logEntries as $logEntry)
            <tr>
                <td><span class="">{{$logEntry->date}}</span></td>
                <td>{{$logEntry->environment}}</td>
                <td>
                @if($logEntry->level == 'error')
                    <span class="text-xs px-3 bg-red-600 text-white rounded-full">{{$logEntry->level}}</span>
                @elseif($logEntry->level == 'debug')
                    <span class="text-xs px-3 bg-warning-500 text-gray-800 rounded-full">{{$logEntry->level}}</span>
                @else
                    <span class="text-xs px-3 bg-gray-200 text-gray-800 rounded-full">{{$logEntry->level}}</span>
                @endif
                </td>
                {{--<td>{{$logEntry->file_path}}</td>--}}
                <td>{{ \Illuminate\Support\Str::limit($logEntry->context, 40, ' (...)')}}</td>
                <td>
                @if($logEntry->stack_traces && $logEntry->stack_traces->count())
                    Show stack trace
                @else
                    No stacktrace
                @endif
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>

    @if ($footer)
        <tfoot>
            <tr class="bg-gray-50">
                {{ $footer }}
            </tr>
        </tfoot>
    @endif
</table>
    </div>    
</x-filament::page>
