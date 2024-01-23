<div>
    <input type="checkbox" {{$attributes->merge(['class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2'])}} />
    <label for="{{$attributes['name']}}" class="ms-2 text-sm font-medium text-gray-500 capitalize">{{$slot}}</label>
</div>
