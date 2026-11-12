@php
    $theme = $theme ?? 'light';
    $subtitle = $subtitle ?? 'We DeliveRED';
    $size = $size ?? 'md';
@endphp

<a href="{{ url('/') }}" class="inline-flex items-center gap-2.5 group focus:outline-none">
    <div class="{{ $size === 'lg' ? 'w-14 h-12' : 'w-11 h-10' }} rounded-xl bg-white border border-slate-200/80 shadow-xs overflow-hidden flex items-center justify-center shrink-0 p-0.5 group-hover:scale-105 transition">
        <img src="{{ asset('images/alabiq-logo.jpg') }}" alt="AlabIQ — We DeliveRED Logo" class="w-full h-full object-contain" />
    </div>
    <div class="flex flex-col leading-none">
        <div class="flex items-center tracking-tight font-black {{ $size === 'lg' ? 'text-2xl' : 'text-lg sm:text-xl' }}">
            <span class="{{ $theme === 'dark' ? 'text-white' : 'text-slate-950' }}">ALAB</span><span class="text-[#D91B24]">IQ</span>
        </div>
        <span class="text-[10px] font-bold tracking-wider uppercase {{ $theme === 'dark' ? 'text-slate-400' : 'text-slate-500' }} mt-0.5">
            {!! $subtitle === 'We DeliveRED' ? 'We Delive<span class="text-[#D91B24]">RED</span>' : e($subtitle) !!}
        </span>
    </div>
</a>
