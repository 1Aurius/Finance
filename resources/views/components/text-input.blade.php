@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' rounded-[8px] bg-cardHighlight focus:border-highLight text-text font-bold']) !!}>
