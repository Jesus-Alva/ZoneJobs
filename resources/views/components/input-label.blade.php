@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bold text-gray-600 uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
