<x-app-layout>
    <div class="flex flex-col justify-center w-full items-start mb-10">
        <div class="inline-flex space-x-6 mb-6 mt-10">
            <div class="bg-white shadow-sm rounded-md w-1/3 p-6">
                <img class="object-cover rounded-md"
                     src="{{ url('storage/images/post-card.png')}}"
                     alt="">
            </div>
            <div class="bg-white shadow-sm rounded-md p-8 w-3/4 ">
                <div class="flex flex-col ">
                    <h2 class="mt-4 text-3xl font-bold text-gray-800">{{$blog->title}}</h2>
                    <a  href="{{route('blogs.index') . '?category[]=' . $blog->category->name}}"
                        class="my-2 p-1 bg-gradient-to-br from-purple-600 cursor-pointer to-blue-500 w-fit text-xs text-gray-200 rounded-md  items-center capitalize ">{{$blog->category->name}}</a>
                    <p class="">{{$blog->short_desc}}</p>
                    <p class="text-xs text-gray-500 ">Created at {{$blog->created_at}}</p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm rounded-md mb-6 p-12">
            {!! $blog->body !!}
        </div>
        <x-comments />
    </div>
</x-app-layout>

