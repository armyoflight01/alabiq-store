<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services — AlabIQ | Order Food, Shop & Book Airport Rides</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] text-slate-900 antialiased pb-16 md:pb-0 selection:bg-[#D91B24] selection:text-white">

    @include('partials.navbar', ['active' => 'services'])

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14 space-y-16">

        <!-- HERO HEADER ("Order food, shop, or book a ride.") -->
        <section class="space-y-6">
            <div>
                <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">● OUR SERVICES</p>
                <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-black text-slate-950 tracking-tight mt-1.5">
                    Order food, shop, or book a ride.
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-2 max-w-xl leading-relaxed">
                    Find restaurants and partner stores in Riyadh — plus airport pick &amp; drop when you need a ride.
                </p>
            </div>

            <!-- Live Search Bar -->
            <div class="max-w-lg relative">
                <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-sm">🔍</span>
                <input
                    type="text"
                    data-alabiq-search
                    placeholder="Search restaurants and stores..."
                    class="w-full pl-10 pr-4 py-3 rounded-2xl bg-white border border-slate-200/90 shadow-2xs text-xs sm:text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-[#F97316]"
                />
            </div>

            <!-- 3 Service Filter Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-1">
                <a href="#restaurants-section" class="p-4 rounded-2xl bg-white border border-slate-200/90 hover:border-[#F97316] shadow-2xs hover:shadow-md transition flex flex-col justify-between group">
                    <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#D91B24] to-[#F97316] text-white flex items-center justify-center text-base shadow-xs group-hover:scale-105 transition">🍴</span>
                    <div class="mt-3">
                        <h3 class="text-sm font-black text-slate-950">Food</h3>
                        <p class="text-[11px] text-slate-500">Restaurants near you</p>
                    </div>
                </a>

                <a href="#shops-section" class="p-4 rounded-2xl bg-white border border-slate-200/90 hover:border-[#F97316] shadow-2xs hover:shadow-md transition flex flex-col justify-between group">
                    <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#F97316] to-amber-500 text-white flex items-center justify-center text-base shadow-xs group-hover:scale-105 transition">🏪</span>
                    <div class="mt-3">
                        <h3 class="text-sm font-black text-slate-950">Shop</h3>
                        <p class="text-[11px] text-slate-500">Supermarkets &amp; stores</p>
                    </div>
                </a>

                <button type="button" onclick="window.AlabIQ.openRideModal('Airport Transfer')" class="text-left p-4 rounded-2xl bg-white border border-slate-200/90 hover:border-[#D91B24] shadow-2xs hover:shadow-md transition flex flex-col justify-between group cursor-pointer">
                    <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#D91B24] to-rose-600 text-white flex items-center justify-center text-base shadow-xs group-hover:scale-105 transition">✈️</span>
                    <div class="mt-3">
                        <h3 class="text-sm font-black text-slate-950">Rides</h3>
                        <p class="text-[11px] text-slate-500">Airport pick &amp; drop</p>
                    </div>
                </button>
            </div>
        </section>

        <!-- RESTAURANTS NEAR YOU SECTION -->
        <section id="restaurants-section" class="space-y-5">
            <div class="flex items-end justify-between">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316]">FOOD DELIVERY</p>
                    <h2 class="text-xl sm:text-2xl font-black text-slate-950 tracking-tight mt-0.5">Restaurants near you</h2>
                    <p class="text-[11px] text-slate-500 mt-1 flex items-center gap-3">
                        <span>● 4 featured partners</span>
                        <span>🛵 From SAR 10.00</span>
                        <span>🕒 24/7 delivery</span>
                    </p>
                </div>
                <a href="{{ url('/shop?tab=restaurants') }}" class="text-xs font-extrabold text-[#F97316] hover:underline">See all →</a>
            </div>

            @php
                $serviceRestaurants = [
                    ['id' => 'black-pinoy', 'name' => 'BLACK PINOY', 'cuisine' => 'Filipino', 'badge' => 'POPULAR', 'badgeClass' => 'bg-orange-50 text-[#F97316] border border-orange-200', 'logo' => 'black-pinoy'],
                    ['id' => 'chowking', 'name' => 'CHOWKING', 'cuisine' => 'Chinese', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chowking'],
                    ['id' => 'chuchay-isabela', 'name' => 'CHUCHAY ISABELA SPECIAL PRODUCTS', 'cuisine' => 'Filipino', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chuchay'],
                    ['id' => 'happy-ending', 'name' => 'HAPPY ENDING', 'cuisine' => 'Filipino', 'badge' => 'POPULAR', 'badgeClass' => 'bg-orange-50 text-[#F97316] border border-orange-200', 'logo' => 'happy-ending'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($serviceRestaurants as $rest)
                    <div
                        data-store-card
                        data-store-name="{{ $rest['name'] }}"
                        data-store-cuisine="{{ $rest['cuisine'] }}"
                        data-store-type="restaurants"
                        onclick="window.AlabIQ.openStoreModal('{{ $rest['id'] }}')"
                        class="group bg-white rounded-2xl border border-slate-200/90 hover:border-[#F97316] p-4 shadow-2xs hover:shadow-xl transition cursor-pointer flex flex-col justify-between"
                    >
                        <div>
                            <div class="mb-2">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase {{ $rest['badgeClass'] }}">
                                    {{ $rest['badge'] }}
                                </span>
                            </div>

                            <div class="py-2 group-hover:scale-105 transition">
                                @include('partials.store-artwork', ['type' => $rest['logo']])
                            </div>

                            <div class="flex items-center justify-between gap-1.5 mt-3">
                                <span class="px-2.5 py-1 rounded-full bg-slate-50 border border-slate-200 text-[10px] font-bold text-slate-700">🕒 Open 24/7</span>
                                <span class="px-2.5 py-1 rounded-full bg-slate-700 text-white text-[10px] font-bold">From SAR 10.00</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-t border-slate-100">
                            <h3 class="text-xs sm:text-sm font-black text-slate-950 uppercase leading-snug group-hover:text-[#D91B24] transition">{{ $rest['name'] }}</h3>
                            <p class="text-[11px] text-slate-500 mt-0.5">{{ $rest['cuisine'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- SHOP PARTNER STORES SECTION -->
        <section id="shops-section" class="space-y-5">
            <div class="flex items-end justify-between">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316]">SUPERMARKETS &amp; SPECIALTY</p>
                    <h2 class="text-xl sm:text-2xl font-black text-slate-950 tracking-tight mt-0.5">Shop partner stores</h2>
                    <p class="text-[11px] text-slate-500 mt-1">3 partner stores • From SAR 10.00 delivery</p>
                </div>
                <a href="{{ url('/shop?tab=groceries') }}" class="text-xs font-extrabold text-[#F97316] hover:underline">See all →</a>
            </div>

            @php
                $partnerShops = [
                    ['id' => 'al-wafa-hypermarket', 'name' => 'AL WAFA HYPERMARKET', 'sub' => 'Supermarket & Groceries', 'badge' => 'POPULAR', 'badgeClass' => 'bg-orange-50 text-[#F97316] border border-orange-200', 'logo' => 'al-wafa'],
                    ['id' => 'al-inma-market', 'name' => 'AL INMA MARKET SPECIALTIES', 'sub' => 'Asian & Specialty Store', 'badge' => 'FEATURED', 'badgeClass' => 'bg-amber-500 text-white', 'logo' => 'al-inma'],
                    ['id' => 'pinas-supermarket', 'name' => 'PINAS SUPERMARKET', 'sub' => 'Filipino Supermarket', 'badge' => 'FEATURED', 'badgeClass' => 'bg-rose-100 text-rose-700', 'logo' => 'pinas'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach($partnerShops as $shop)
                    <div
                        data-store-card
                        data-store-name="{{ $shop['name'] }}"
                        data-store-cuisine="{{ $shop['sub'] }}"
                        data-store-type="shops"
                        onclick="window.AlabIQ.openStoreModal('{{ $shop['id'] }}')"
                        class="group bg-white rounded-2xl border border-slate-200/90 hover:border-[#F97316] p-4 shadow-2xs hover:shadow-xl transition cursor-pointer flex flex-col justify-between"
                    >
                        <div>
                            <div class="mb-3">
                                <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase {{ $shop['badgeClass'] }}">
                                    {{ $shop['badge'] }}
                                </span>
                            </div>

                            <div class="py-2 group-hover:scale-105 transition">
                                @include('partials.store-artwork', ['type' => $shop['logo']])
                            </div>

                            <div class="flex items-center justify-between gap-1.5 mt-3">
                                <span class="px-2.5 py-1 rounded-full bg-slate-50 border border-slate-200 text-[10px] font-bold text-slate-700">🕒 Open 24/7</span>
                                <span class="px-2.5 py-1 rounded-full bg-slate-700 text-white text-[10px] font-bold">From SAR 10.00</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-t border-slate-100">
                            <h3 class="text-xs sm:text-sm font-black text-slate-950 uppercase leading-snug group-hover:text-[#D91B24] transition">{{ $shop['name'] }}</h3>
                            <p class="text-[11px] text-slate-500 mt-0.5">{{ $shop['sub'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- DARK AIRPORT TRANSFERS BANNER (Exact match to services screenshot) -->
        <section class="rounded-3xl bg-gradient-to-r from-[#111622] via-[#181F30] to-[#2B191E] p-7 sm:p-10 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 shadow-xl">
            <div class="space-y-2 max-w-lg">
                <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316]">PICK &amp; DROP • AIRPORT RIDES</p>
                <h2 class="text-xl sm:text-2xl font-black tracking-tight">
                    Airport transfers with a fare you see first.
                </h2>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Book reliable rides across Riyadh or directly to King Khalid International Airport with upfront fixed pricing and live driver tracking.
                </p>
            </div>
            <button
                type="button"
                onclick="window.AlabIQ.openRideModal('Airport Transfer')"
                class="px-6 py-3 rounded-xl font-bold text-xs sm:text-sm text-white bg-gradient-to-r from-[#F97316] to-[#D91B24] hover:opacity-95 shadow-lg shadow-orange-500/25 shrink-0 cursor-pointer transition"
            >
                Book a ride →
            </button>
        </section>

        <!-- HOW IT WORKS 3-CARD ROW -->
        <section class="space-y-4">
            <h2 class="text-base sm:text-lg font-black text-slate-950">How it works</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-5 rounded-2xl bg-white border border-slate-200/80 space-y-2">
                    <span class="w-8 h-8 rounded-lg bg-orange-50 text-[#F97316] flex items-center justify-center text-sm font-bold">🔍</span>
                    <h3 class="text-xs sm:text-sm font-black text-slate-950">1. Browse</h3>
                    <p class="text-xs text-slate-500">Pick food, groceries, or airport transfer in seconds.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white border border-slate-200/80 space-y-2">
                    <span class="w-8 h-8 rounded-lg bg-orange-50 text-[#F97316] flex items-center justify-center text-sm font-bold">🛍️</span>
                    <h3 class="text-xs sm:text-sm font-black text-slate-950">2. Order or book</h3>
                    <p class="text-xs text-slate-500">See transparent delivery fees &amp; upfront fares first.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white border border-slate-200/80 space-y-2">
                    <span class="w-8 h-8 rounded-lg bg-orange-50 text-[#D91B24] flex items-center justify-center text-sm font-bold">📍</span>
                    <h3 class="text-xs sm:text-sm font-black text-slate-950">3. Track live</h3>
                    <p class="text-xs text-slate-500">Follow your AlabIQ Red Rider live to your door.</p>
                </div>
            </div>
        </section>

        <!-- TRUSTED BY OUR BRAND PARTNERS -->
        <section id="partners" class="py-8 text-center border-t border-slate-100">
            <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316] mb-6">TRUSTED BY OUR BRAND PARTNERS</p>
            <div class="grid grid-cols-2 sm:grid-cols-5 gap-4">
                @foreach(['black-pinoy', 'chowking', 'chuchay', 'happy-ending', 'jollibee'] as $partnerLogo)
                    <div onclick="window.AlabIQ.openStoreModal('{{ $partnerLogo === 'chuchay' ? 'chuchay-isabela' : ($partnerLogo === 'jollibee' ? 'jollibee-riyadh' : $partnerLogo) }}')" class="bg-white rounded-2xl p-3 border border-slate-200/80 shadow-2xs hover:shadow-md hover:border-orange-300 transition cursor-pointer flex items-center justify-center">
                        <div class="scale-75 -my-4">
                            @include('partials.store-artwork', ['type' => $partnerLogo])
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    @include('partials.footer')
    @include('partials.modals')
</body>
</html>
