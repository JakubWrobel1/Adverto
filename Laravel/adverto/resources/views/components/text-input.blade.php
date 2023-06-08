@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2']) !!}>
