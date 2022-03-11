<x-filament::page>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Log Files - view
            </h2>
        </x-slot>
        <div class="w-full inline-block rounded-lg border shadow-xl pt-2">


        <table class="w-full text-left rtl:text-right divide-y table-auto">
            <thead>
            <tr class="bg-gray-50">
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Environment</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Context</td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</td>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @if($logEntries)
                @foreach ($logEntries as $logEntry)
                    <tr>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <span class="">{{$logEntry->date}}</span>
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            {{$logEntry->environment}}
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            @if($logEntry->level == 'error')
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            {{Illuminate\Support\Str::title($logEntry->level)}}
                                        </span>
                            @elseif($logEntry->level == 'debug')
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            {{Illuminate\Support\Str::title($logEntry->level)}}
                                        </span>
                            @else
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                            {{Illuminate\Support\Str::title($logEntry->level)}}
                                        </span>
                            @endif
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap truncate max-w-sm">
                            {{$logEntry->context}}
                        </td>
                        <td class="px-2 py-3 whitespace-nowrap">
                            <a href="{{ Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage::getUrl(['recordId' => $logEntry->id,'fileName'=> $filename])}}"
                               class="hover:underline focus:outline-none focus:underline text-primary-600 hover:text-primary-500 text-sm font-medium">
                                View details
                            </a>
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
    </div>
</x-filament::page>
