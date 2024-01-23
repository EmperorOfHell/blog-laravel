<a href="{{route('blogs.show', ['blog' => $item->id])}}" class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row min-h-56 hover:bg-gray-100">
    <img class="object-cover h-1/6 w-1/3 rounded-md pl-6 "
         src="{{ url('storage/images/post-card.png')}}"
         alt="">
    <div class="flex flex-col pl-6">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-gray-800">{{$item->title}}</h5>
        <p class="font-normal text-gray-500">{{$item->short_desc}}</p>
    </div>
</a>
