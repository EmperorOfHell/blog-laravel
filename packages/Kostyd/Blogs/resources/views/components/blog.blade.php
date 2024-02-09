<x-category-panel />
<div class="w-3/4 space-y-6">
    <x-blogs::search />
    <div class="flex justify-between">
        <x-filters/>
        <x-sort />
    </div>


    @foreach($posts as $post)
        <x-blogs::post-card :item="$post"/>
    @endforeach
    {{$posts->links()}}
</div>
