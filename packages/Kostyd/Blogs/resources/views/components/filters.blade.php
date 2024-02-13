<div class="">
    @foreach($filters as $filter => $value)
        <span class="flex flex-wrap items-center">
            @if(is_array($value) or $value instanceof Traversable)
            <p class="ms-2 text-sm font-medium text-gray-700 capitalize">
                {{ $filter }}:
            </p>
            <div class="flex flex-wrap px-2">
                @foreach($value as $item)
                    <x-blogs::filter-block href="{{$request->fullUrlWithoutArrayParamsQuery($filter, $item)}}">
                        {{$item}}
                    </x-blogs::filter-block>
                @endforeach
            </div>
            @endif
        </span>
    @endforeach
</div>
