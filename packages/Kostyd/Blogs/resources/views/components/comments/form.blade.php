<form class="mb-6" xmlns="http://www.w3.org/1999/html">
    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <label for="title" class="sr-only">Your comment</label>
        <input id="title"
            type="text" class="px-0 w-full text-md font-semibold text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Write a title...">
        <label for="comment" class="sr-only">Your comment</label>
        <textarea x-data="{
                resize () {
                    $el.style.height = '0px';
                    $el.style.height = $el.scrollHeight + 'px'
                }
            }"
                  x-init="resize()"
                  @input="resize()"
                  id="comment"
                  class="px-0 w-full text-sm text-gray-900 border-0 overflow-hidden resize-none focus:ring-0 focus:outline-none"
                  placeholder="Write a comment..." required></textarea>
        <x-blogs::comments.rating />
    </div>

    <x-button.submit>
        Post Comment
    </x-button.submit>
</form>
