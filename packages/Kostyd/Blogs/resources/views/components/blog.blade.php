<x-category-panel />
<div class="w-3/4 space-y-6">
    <x-blogs::search />
    <div class="flex justify-between">
        <x-filters/>
        <x-sort />
    </div>

    @if($posts->isEmpty())
        <div class="flex items-center justify-center">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="text-gray-900 center px-6 py-3">
                    {{ __("Not found any post") }}
                </div>
            </div>
        </div>
    @else
        @foreach($posts as $post)
            <x-blogs::post-card :item="$post"/>
        @endforeach
    @endif
    {{$posts->links()}}
</div>
