@php use Illuminate\Support\Carbon; @endphp
<x-filament::page>
    <div
        class="border border-gray-300 shadow-sm bg-white rounded-xl filament-tables-container dark:bg-gray-800 dark:border-gray-700">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium dark:text-gray-900">
                Details
            </h3>
        </div>
        <div class="border border-gray-300 dark:bg-gray-800 dark:border-gray-700">
            <dl>
                <div class="dark:bg-gray-800 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium">
                        Date
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                        {{Carbon::parse($entry->date)->format('M d, Y h:i A')}}
                    </dd>
                </div>
                <div class="dark:bg-gray-800 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium">
                        Environment
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                        {{$entry->environment}}
                    </dd>
                </div>
                <div class="dark:bg-gray-800 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium">
                        Level
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                        @if($entry->level == 'error')
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            {{Illuminate\Support\Str::title($entry->level)}}
                                        </span>
                        @elseif($entry->level == 'debug')
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            {{Illuminate\Support\Str::title($entry->level)}}
                                        </span>
                        @else
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                            {{Illuminate\Support\Str::title($entry->level)}}
                                        </span>
                        @endif
                    </dd>
                </div>
                <div class="dark:bg-gray-800 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium">
                        Context
                    </dt>
                </div>
                <div class="dark:bg-gray-800 px-4 pb-5">
                    <dd>
                        <pre
                            class="whitespace-pre-wrap">{{$entry->context}}</pre>
                    </dd>
                </div>
                <div class="dark:bg-gray-800 px-4 pt-5">
                    <dt class="text-sm font-medium">
                        Stack trace
                    </dt>
                </div>
                <div class="dark:bg-gray-800 px-4 py-5 w-full">
                    <dd class="mt-1 text-sm">
                        @if($entry->stack_traces && $entry->stack_traces->count())
                            @foreach ($entry->stack_traces as $st)
                                <div
                                    class="{{!$loop->last ? 'border-b': ''}} {{$loop->first ? 'border-t': ''}} border-gray-200 py-3">
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 rounded break-words">
                                        <div class="col-span-1 font-bold">Caught at</div>
                                        <div class="col-span-2">{{$st->caught_at}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 rounded break-words">
                                        <div class="col-span-1 font-bold">In</div>
                                        <div class="col-span-2">{{$st->in}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 rounded break-words">
                                        <div class="col-span-1 font-bold">Line</div>
                                        <div class="col-span-2">{{$st->line}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full pt-0.5 px-1 rounded break-words">
                                        <div class="col-span-1 font-bold">content</div>
                                        <div class="col-span-2">{{$st->__toString()}}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-filament::page>
