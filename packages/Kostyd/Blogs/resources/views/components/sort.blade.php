
<div class="flex items-center space-x-2 ">

    @php
        $dir = request()->query('dir') === 'desc'
    @endphp
    <a href="{{ $req->fullUrlWithQuery(['dir' =>  $dir ? 'asc' : 'desc']) }}" >
        <svg class="w-6 h-6 @if($dir ) text-blue-500 @else text-gray-500 @endif " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
        </svg>
    </a>
    <div x-data="{ 'showModal': false, toggle: false }"
         @keydown.escape="showModal = false"
         class="relative inline-block text-left">
        <div>
            <button @click="showModal = true" type="button" class="capitalize inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                {{$req->query('sort') ? $sorting[$req->query('sort')] : 'Sort'}}
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Dropdown menu, show/hide based on menu state  -->
        <div  x-cloak
              x-show="showModal"
              @click.away="showModal = false"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0  z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg"
        >
            <div class="py-1" role="none">
                @foreach($sorting as $sort => $name)
                    <!-- Active: "", Not Active: "text-gray-700" -->
                    <a href="{{ $req->fullUrlWithQuery(['sort' => $sort]) }}"
                       class="hover:bg-gray-100 hover:text-gray-900 text-gray-700 block px-4 py-2 text-sm">
                        By {{$name}}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
