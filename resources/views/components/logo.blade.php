@props(['light' => false])

<a href="{{ route('home') }}" {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    <span class="flex size-9 items-center justify-center rounded-xl {{ $light ? 'bg-white text-navy-900' : 'bg-navy-800 text-white' }}">
        <x-icon name="briefcase" class="size-5" />
    </span>
    <span class="text-lg font-extrabold tracking-tight {{ $light ? 'text-white' : 'text-navy-900' }}">LOKERIN</span>
</a>
