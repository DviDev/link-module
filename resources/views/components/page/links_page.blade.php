<x-lte::layout.v1.page>
    <x-slot:header>
        <div class="flex justify-between">
            <div class="my-auto text-gray-800 text-bold">Links</div>
            <a href="{{route('builder.page', 1)}}" class="btn btn-primary">Structure</a>
        </div>
    </x-slot:header>
    <x-slot:body>
        <livewire:link::table/>
    </x-slot:body>
</x-lte::layout.v1.page>
