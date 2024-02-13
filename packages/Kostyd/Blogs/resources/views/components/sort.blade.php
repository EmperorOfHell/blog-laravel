<div x-data="{ 'showModal': false, toggle: false }" @keydown.escape="showModal = false" class="flex items-center space-x-3">

    <a>
        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
        </svg>

    </a>
    <button @click="showModal = true" class="inline-flex h-fit text-white bg-gradient-to-br from-blue-500 to-purple-500 hover:bg-gradient-to-bl font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
    Sort
    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
    </button>


<!-- Dropdown menu -->
<div  x-cloak x-show="showModal" @click.away="showModal = false"
     class="flex z-10 absolute w-48 -translate-x-1/4 m-2 rounded-lg shadow border-2 backdrop-blur-md border-blue-300">
    <ul class="p-3 space-y-3 text-sm text-gray-700 ">
        @foreach($sorting as $sort => $name)
            <li>
                <a
                   href="{{ request()->fullUrlWithQuery(array_merge(request()->all(), ['sort' => $sort])) }}"
                   class="hover:text-gray-600 duration-100 ms-2 text-sm font-medium text-gray-900 ">
                    By {{$name}}
                </a>
            </li>
        @endforeach
    </ul>
{{--    <label class="relative inline-flex space-x-2 mt-2 items-center cursor-pointer">--}}
{{--        <input type="checkbox" value="" class="sr-only peer"--}}
{{--               @click="toggle = !toggle"--}}
{{--        >--}}
{{--        <span class=" text-xs font-medium text-gray-900 dark:text-gray-300">ASC</span>--}}
{{--        <div class="w-6 h-3 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute  after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-blue-400"></div>--}}
{{--    </label>--}}
</div>
</div>
