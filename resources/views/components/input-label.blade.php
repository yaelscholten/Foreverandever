@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black bg-white']) }}>
    {{ $value ?? $slot }}
</label>
