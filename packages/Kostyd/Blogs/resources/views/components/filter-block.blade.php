<a {{$attributes->merge(['class' => 'bg-gray-400 m-0.5 p-1 hover:bg-gray-500 cursor-pointer duration-150 shadow-sm text-xs text-gray-200 rounded-md flex items-center'])}}>
    {{$slot}}
    <x-svg.cross class="w-3 h-3 ml-0.5 text-white" />
</a>
