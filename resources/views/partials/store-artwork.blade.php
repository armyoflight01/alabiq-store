@php
    $type = $type ?? 'black-pinoy';
@endphp

@if($type === 'black-pinoy')
    <div class="w-36 h-36 mx-auto rounded-full bg-gradient-to-b from-blue-700 via-slate-900 to-red-700 p-1 shadow-md flex items-center justify-center relative overflow-hidden">
        <div class="w-full h-full rounded-full bg-slate-900 flex flex-col items-center justify-center text-center p-2 relative">
            <span class="text-3xl leading-none">👨🏽‍🍳</span>
            <span class="mt-1 font-black text-xs tracking-tight text-amber-400 uppercase drop-shadow">BLACK PINOY</span>
            <span class="text-[9px] text-white/80 font-bold tracking-widest uppercase">Riyadh Kitchen</span>
        </div>
    </div>
@elseif($type === 'chowking')
    <div class="w-full h-36 rounded-xl bg-[#E11D2E] flex flex-col items-center justify-center p-4 shadow-inner relative overflow-hidden">
        <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-md border-2 border-amber-300">
            <span class="text-2xl font-black text-[#E11D2E] tracking-tighter italic">Ck</span>
        </div>
        <span class="mt-2 text-white font-extrabold text-sm tracking-wide">Chowking 东方</span>
    </div>
@elseif($type === 'chuchay')
    <div class="w-36 h-36 mx-auto rounded-full border-4 border-amber-400/80 bg-amber-50/60 flex flex-col items-center justify-center p-3 text-center shadow-xs">
        <span class="text-amber-600 text-sm">👑</span>
        <span class="font-black text-xs text-slate-900 tracking-wider uppercase mt-0.5">CHUCHAY</span>
        <span class="text-[9px] font-bold text-amber-800 tracking-widest uppercase">ISABELA SPECIAL</span>
        <span class="text-[8px] font-semibold text-slate-500 uppercase mt-0.5">PRODUCTS • EST 2021</span>
    </div>
@elseif($type === 'happy-ending')
    <div class="w-40 h-36 mx-auto rounded-2xl bg-gradient-to-br from-amber-500 via-orange-600 to-slate-900 p-2.5 flex flex-col items-center justify-center text-center text-white shadow-md relative overflow-hidden">
        <div class="flex items-center gap-1 text-lg">🍢🍔🧋</div>
        <span class="font-black text-sm leading-tight tracking-tight text-amber-300 uppercase mt-1 drop-shadow">HAPPY ENDING</span>
        <span class="px-2 py-0.5 mt-1 rounded bg-white/15 text-[9px] font-extrabold tracking-widest uppercase text-white">STREET FOOD</span>
    </div>
@elseif($type === 'jollibee')
    <div class="w-36 h-36 mx-auto rounded-2xl bg-white border border-red-100 flex flex-col items-center justify-center p-3 text-center shadow-xs">
        <div class="w-16 h-16 rounded-full bg-[#E11D2E] text-white flex items-center justify-center text-3xl shadow-sm">🐝</div>
        <span class="mt-2 font-black text-sm text-[#E11D2E] tracking-tight">Jollibee</span>
    </div>
@elseif($type === 'al-wafa')
    <div class="w-full h-32 rounded-xl bg-emerald-50/70 border border-emerald-200/70 flex flex-col items-center justify-center p-4 text-center">
        <div class="flex items-center gap-1.5">
            <span class="px-2.5 py-1 rounded-lg bg-[#E11D2E] text-white font-black text-lg leading-none">W</span>
            <div class="text-left">
                <div class="text-xs font-black text-emerald-800 leading-none">الوفاء</div>
                <div class="text-sm font-black text-emerald-700 tracking-tight leading-none mt-0.5">AL WAFA</div>
            </div>
        </div>
        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-2">HYPERMARKET</span>
    </div>
@elseif($type === 'al-inma')
    <div class="w-32 h-32 mx-auto rounded-full border-4 border-amber-700/30 bg-amber-50 flex flex-col items-center justify-center p-3 text-center shadow-xs">
        <span class="text-2xl">🧺</span>
        <span class="font-extrabold text-[11px] text-amber-950 leading-tight mt-1">AL INMA MARKET</span>
        <span class="text-[9px] font-semibold text-amber-700 uppercase tracking-wider">SPECIALTIES</span>
    </div>
@elseif($type === 'pinas')
    <div class="w-full h-32 rounded-xl bg-rose-50/70 border border-rose-200/60 flex flex-col items-center justify-center p-4 text-center">
        <span class="text-2xl font-black tracking-tight text-rose-600">PI<span class="text-emerald-600">Ñ</span>AS</span>
        <span class="text-[10px] font-bold tracking-widest uppercase text-emerald-700 mt-0.5">SUPERMARKET</span>
    </div>
@else
    <div class="w-32 h-32 mx-auto rounded-2xl bg-orange-50 flex flex-col items-center justify-center p-3 text-center">
        <span class="text-3xl">🍜</span>
        <span class="font-bold text-xs text-slate-800 mt-1">ALABIQ PARTNER</span>
    </div>
@endif
