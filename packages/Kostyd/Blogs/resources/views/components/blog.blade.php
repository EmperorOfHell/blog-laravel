<x-category-panel />
<div class="w-3/4 space-y-6">
    <x-blogs::search />
    @foreach($posts as $post)
        <x-blogs::post-card :item="$post"/>
    @endforeach
    {{$posts->links()}}
</div>
