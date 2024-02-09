<div class="">
    @foreach($filters as $filter => $value)
        <span class="flex flex-wrap items-center">
            <p class="ms-2 text-sm font-medium text-gray-700 capitalize">
               {{ $filter }}:
            </p>
            <div class="flex flex-wrap px-2">
                @if(is_array($value) or $value instanceof Traversable)
                    @foreach($value as $item)
                        <x-blogs::filter-block href="{{$request->fullUrlWithoutArrayParamsQuery($filter, $item)}}">
                            {{$item}}
                        </x-blogs::filter-block>
                    @endforeach
                @else
                    <x-blogs::filter-block href="{{$request->fullUrlWithoutQuery($filter)}}">
                        {{$value}}
                    </x-blogs::filter-block>
                @endif
            </div>
        </span>
    @endforeach
</div>
