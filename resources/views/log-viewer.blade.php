<x-filament::page>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Log Files
            </h2>
        </x-slot>
    <div>
      {{ $this->table }}
    </div>
        
    </div>
    
</x-filament::page>
