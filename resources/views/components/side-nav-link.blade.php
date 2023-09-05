@props(['active', 'icon'])

@php
    $classes = $active ?? false ? 'bg-blue-50 text-sky-900 w-full font-bold' : 'hover:bg-slate-50 text-slate-900';
@endphp

<a
    {{ $attributes->class(['block py-2.5 px-4 font-inter rounded-lg flex flex-row items-center h-12'])->merge(['class' => $classes]) }}>
    @if ($icon)
        <i class="mr-2 fas fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
