<x-filament::page>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Details
            </h3>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Date
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$entry->date}}
                    </dd>
                </div>
                <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Environment
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$entry->environment}}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Level
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
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
                <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Context
                    </dt>
                </div>
                <div class="bg-gray-50 px-4 pb-5">
                    <dd>
                        <pre
                            class="whitespace-pre-wrap">{{$entry->context}}</pre>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 pt-5">
                    <dt class="text-sm font-medium text-gray-500">
                        Stack trace
                    </dt>
                </div>
                <div class="bg-gray-50 px-4 py-5 w-full">
                    <dd class="mt-1 text-sm text-gray-900">
                        @if($entry->stack_traces && $entry->stack_traces->count())
                            @foreach ($entry->stack_traces as $st)
                                <div
                                    class="{{!$loop->last ? 'border-b': ''}} {{$loop->first ? 'border-t': ''}} border-gray-200 py-3">
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">Caught at</div>
                                        <div class="col-span-2">{{$st->caught_at}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">In</div>
                                        <div class="col-span-2">{{$st->in}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full py-0.5 px-1 hover:bg-gray-100 rounded">
                                        <div class="col-span-1 font-bold">Line</div>
                                        <div class="col-span-2">{{$st->line}}</div>
                                    </div>
                                    <div class="grid grid-cols-3 w-full pt-0.5 px-1 hover:bg-gray-100 rounded">
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

    {{--        <div>--}}

    {{--            <div class="">--}}
    {{--                <table class="w-full text-left rtl:text-right divide-y table-auto">--}}
    {{--                    <tr>--}}
    {{--                        <td>Date:</td>--}}
    {{--                        <td>{{$entry->date}}</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Environment:</td>--}}
    {{--                        <td>{{$entry->environment}}</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Level:</td>--}}
    {{--                        <td>{{$entry->level}}</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Context:</td>--}}
    {{--                        <td>{{$entry->context}}</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Stack trace:</td>--}}
    {{--                        <td>--}}
    {{--                            @if($entry->stack_traces && $entry->stack_traces->count())--}}

    {{--                                @foreach ($entry->stack_traces as $st)--}}
    {{--                                    <table>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>Caught at</td>--}}
    {{--                                            <td>{{$st->caught_at}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>In</td>--}}
    {{--                                            <td>{{$st->in}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>Line</td>--}}
    {{--                                            <td>{{$st->line}}</td>--}}
    {{--                                        </tr>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>content</td>--}}
    {{--                                            <td>--}}
    {{--                                                {{$st->__toString()}}--}}
    {{--                                            </td>--}}
    {{--                                        </tr>--}}
    {{--                                    </table>--}}
    {{--                                @endforeach--}}

    {{--                            @endif--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}


    {{--                    @if ($footer)--}}
    {{--                        <tfoot>--}}
    {{--                        <tr class="bg-gray-50">--}}
    {{--                            {{ $footer }}--}}
    {{--                        </tr>--}}
    {{--                        </tfoot>--}}
    {{--                    @endif--}}
    {{--                </table>--}}
    {{--            </div>--}}
</x-filament::page>
