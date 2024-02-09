<x-blogs::panel class="w-1/4">
    <x-slot:heading>
        Category
    </x-slot:heading>
    <form method="get">

    <div class="p-4">

        @foreach($category as $item)
            <x-input.checkbox id="{{$item->id}}"
                              name="category[]"
                              value="{{$item->name}}"
                              :checked="in_array($item->name, $filters)"
            >{{$item->name}}</x-input.checkbox>
        @endforeach

    </div>
        <x-button.submit>
            <x-svg.search></x-svg.search>
            Find
        </x-button.submit>
    </form>
</x-blogs::panel>
