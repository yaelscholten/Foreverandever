@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#6FC276] bg-[#f1f1f1] text-black focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
