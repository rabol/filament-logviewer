<x-filament::page>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ $header }}
            </h2>
        </x-slot>
    <div>

    <div class="">
    <table class="w-full text-left rtl:text-right divide-y table-auto">
    <tr>
        <td>Date:</td>
        <td>{{$entry->date}}</td>
    </tr>
    <tr>
        <td>Environment:</td>
        <td>{{$entry->environment}}</td>
    </tr>
    <tr>
        <td>Level:</td>
        <td>{{$entry->level}}</td>
    </tr>
    <tr>
        <td>Context:</td>
        <td>{{$entry->context}}</td>
    </tr>
    <tr>
        <td>Stack trace:</td>
        <td>
        @if($entry->stack_traces && $entry->stack_traces->count())
            
            @foreach ($entry->stack_traces as $st)
            <table>
                <tr>
                    <td>Caught at</td>
                    <td>{{$st->caught_at}}</td>
                </tr>
                <tr>
                    <td>In</td>
                    <td>{{$st->in}}</td>
                </tr>
                <tr>
                    <td>Line</td>
                    <td>{{$st->line}}</td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>{{$st->__toString()}}</td>
                </tr>
            </table>
            @endforeach
            
        @endif
        </td>
    </tr>
 


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
