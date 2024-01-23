<div {{$attributes->merge(['class' => 'bg-white rounded-lg p-6 shadow-sm'])}}>
    <h2 class="font-semibold text-gray-700">
    {{$heading ?? ''}}
    </h2>
    {{$slot}}

</div>
