<x-blogs::panel class="w-1/4">
    <x-slot:heading>
        Category
    </x-slot:heading>
    <div class="p-4">

        @foreach($category as $item)
            <x-input.checkbox id="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</x-input.checkbox>
        @endforeach

    </div>
    <x-button.button>Find</x-button.button>

</x-blogs::panel>
