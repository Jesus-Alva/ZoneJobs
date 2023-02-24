@php
    $clases = " text-sm text-gray-600 hover:text-gray-900 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
@endphp

<div>
    <a {{ $attributes->merge(['class' => $clases]) }}>
        {{  $slot }}
    </a>
</div>