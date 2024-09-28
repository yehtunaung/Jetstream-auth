  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
          User List
        </h2>
    </x-slot>

    @livewire('table-component', ['columns' => $columns,'data' => $dataModel])
    {{-- @livewire('table-component', ['columns' => json_encode($columns), 'data' => $dataModel]) --}}

</x-app-layout>
