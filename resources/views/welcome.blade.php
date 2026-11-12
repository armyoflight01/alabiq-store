<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlabIQ — We DeliveRED | Food, Groceries & Rides Delivered Fast</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFBF9] text-slate-900 antialiased pb-16 md:pb-0 selection:bg-[#D91B24] selection:text-white">

    @include('partials.navbar', ['active' => 'home'])

    <!-- HERO SECTION (Matches home1 & home2 reference images with switchable phone mockup) -->
    <section class="relative overflow-hidden bg-gradient-to-b from-orange-50/60 via-[#FDFBF9] to-white bg-grid-warm pt-8 pb-16 lg:py-20 border-b border-slate-100">
        <div class="pointer-events-none absolute -top-24 right-1/4 w-96 h-96 rounded-full bg-orange-400/15 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 left-10 w-80 h-80 rounded-full bg-red-500/10 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Column: Hero Copy, Search, Category Cards & Stats -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-orange-100/80 border border-orange-200 text-[11px] font-extrabold uppercase tracking-wider text-[#D91B24]">
                        <span class="w-2 h-2 rounded-full bg-[#D91B24] animate-pulse"></span>
                        <span>FAST DELIVERY PLATFORM • WE DELIVERED</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-[54px] font-black tracking-tight text-slate-950 leading-[1.08]">
                        Shop food,<br />
                        groceries <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">&amp;</span><br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D91B24] to-[#F97316]">more</span> —<br />
                        delivered fast.
                    </h1>

                    <p class="text-sm sm:text-base text-slate-600 max-w-xl leading-relaxed">
                        Craving authentic Filipino dishes, Chinese wok classics, fresh supermarket groceries, or need an instant airport transfer? <strong class="text-slate-900">AlabIQ</strong> brings Riyadh to your door in minutes.
                    </p>

                    <!-- Interactive Address / Store Search Bar -->
                    <form action="{{ url('/shop') }}" method="GET" class="max-w-xl bg-white p-2 rounded-2xl shadow-lg shadow-orange-950/5 border border-slate-200/90 flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                        <div class="flex items-center gap-2.5 px-3 py-2 flex-1">
                            <span class="text-[#D91B24] text-lg">📍</span>
                            <input
                                type="text"
                                name="q"
                                placeholder="Search Black Pinoy, Chowking, groceries or address..."
                                class="w-full text-xs sm:text-sm font-medium text-slate-800 placeholder:text-slate-400 focus:outline-none"
                            />
                        </div>
                        <button type="submit" class="px-6 py-3 rounded-xl font-bold text-xs sm:text-sm text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-md shadow-orange-500/20 cursor-pointer transition shrink-0">
                            Explore →
                        </button>
                    </form>

                    <!-- Quick Explore Category Mini Cards -->
                    <div>
                        <p class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 mb-2.5">EXPLORE CATEGORIES</p>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 max-w-xl">
                            <a href="{{ url('/shop?tab=restaurants') }}" class="p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-[#F97316] shadow-2xs hover:shadow-md transition flex flex-col items-center text-center group">
                                <span class="w-9 h-9 rounded-xl bg-orange-50 text-[#F97316] flex items-center justify-center text-lg group-hover:scale-110 transition">🍴</span>
                                <span class="text-xs font-extrabold text-slate-900 mt-1.5">Restaurants</span>
                                <span class="text-[10px] text-slate-400">Hot meals 24/7</span>
                            </a>
                            <a href="{{ url('/shop?tab=groceries') }}" class="p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-emerald-500 shadow-2xs hover:shadow-md transition flex flex-col items-center text-center group">
                                <span class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg group-hover:scale-110 transition">🛍️</span>
                                <span class="text-xs font-extrabold text-slate-900 mt-1.5">Groceries</span>
                                <span class="text-[10px] text-slate-400">Daily fresh</span>
                            </a>
                            <a href="{{ url('/shop?tab=shops') }}" class="p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-purple-500 shadow-2xs hover:shadow-md transition flex flex-col items-center text-center group">
                                <span class="w-9 h-9 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-lg group-hover:scale-110 transition">🏪</span>
                                <span class="text-xs font-extrabold text-slate-900 mt-1.5">Shops</span>
                                <span class="text-[10px] text-slate-400">Partner stores</span>
                            </a>
                            <a href="{{ url('/shop?tab=deals') }}" class="p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-[#D91B24] shadow-2xs hover:shadow-md transition flex flex-col items-center text-center group">
                                <span class="w-9 h-9 rounded-xl bg-rose-50 text-[#D91B24] flex items-center justify-center text-lg group-hover:scale-110 transition">🏷️</span>
                                <span class="text-xs font-extrabold text-slate-900 mt-1.5">Deals</span>
                                <span class="text-[10px] text-slate-400">Save up to 20%</span>
                            </a>
                        </div>
                    </div>

                    <!-- CTA Buttons & Key Metrics -->
                    <div class="flex flex-wrap items-center gap-3 pt-1">
                        <a href="{{ url('/shop') }}" class="px-6 py-3 rounded-full text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-lg shadow-orange-500/25 transition">
                            Order Now →
                        </a>
                        <a href="{{ url('/services') }}" class="px-6 py-3 rounded-full text-xs sm:text-sm font-bold text-slate-800 bg-white border border-slate-200 hover:border-slate-300 shadow-2xs transition">
                            Explore Services
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-4 max-w-md pt-3 border-t border-slate-200/70">
                        <div>
                            <p class="text-lg sm:text-xl font-black text-slate-950">500+</p>
                            <p class="text-[11px] text-slate-500 font-medium">Partner Stores</p>
                        </div>
                        <div>
                            <p class="text-lg sm:text-xl font-black text-slate-950">15–25m</p>
                            <p class="text-[11px] text-slate-500 font-medium">Avg. Delivery Time</p>
                        </div>
                        <div>
                            <p class="text-lg sm:text-xl font-black text-slate-950">24/7</p>
                            <p class="text-[11px] text-slate-500 font-medium">Live Rider Tracking</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Phone Mockup with Switchable Modes (Browse vs Live Tracking) -->
                <div class="lg:col-span-5 flex flex-col items-center relative">
                    <!-- Floating Callout Badges -->
                    <div class="hidden sm:flex absolute -top-3 right-2 z-20 items-center gap-2.5 bg-white px-3.5 py-2 rounded-2xl shadow-xl border border-slate-100">
                        <span class="w-7 h-7 rounded-xl bg-gradient-to-br from-[#D91B24] to-[#F97316] text-white flex items-center justify-center text-xs font-bold">⚡</span>
                        <div>
                            <p class="text-[11px] font-extrabold text-slate-900">Fast Dispatch</p>
                            <p class="text-[10px] text-slate-500">Rider assigned in 45s</p>
                        </div>
                    </div>

                    <div class="hidden sm:flex absolute top-1/3 -left-6 z-20 items-center gap-2 bg-white px-3.5 py-2.5 rounded-2xl shadow-xl border border-slate-100">
                        <div>
                            <p class="text-[10px] font-bold uppercase text-slate-400">AVG. DELIVERY</p>
                            <p class="text-xs font-black text-slate-950">15–25 min</p>
                        </div>
                    </div>

                    <div class="hidden sm:flex absolute bottom-20 -right-4 z-20 items-center gap-2 bg-gradient-to-br from-[#F97316] to-[#D91B24] text-white px-4 py-2.5 rounded-2xl shadow-xl">
                        <div>
                            <p class="text-sm font-black">4.9 ★</p>
                            <p class="text-[10px] font-semibold text-white/90">Customer Rating</p>
                        </div>
                    </div>

                    <!-- Smartphone Frame -->
                    <div class="w-[300px] sm:w-[325px] rounded-[42px] bg-slate-950 p-3 shadow-2xl border-4 border-slate-800 relative">
                        <!-- Dynamic Island -->
                        <div class="w-24 h-5 bg-black rounded-full mx-auto mb-2 flex items-center justify-between px-2.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span class="text-[8px] font-bold text-white">ALABIQ</span>
                        </div>

                        <!-- Phone Screen Mode 1: Browse App Feed (Matches home1) -->
                        <div id="phone-screen-browse" class="bg-white rounded-[32px] overflow-hidden h-[500px] flex flex-col justify-between">
                            <div class="p-3.5 space-y-3 overflow-y-auto no-scrollbar">
                                <!-- Promo Card Inside Phone -->
                                <div class="rounded-2xl bg-gradient-to-r from-emerald-800 via-teal-700 to-slate-900 p-3.5 text-white relative overflow-hidden">
                                    <span class="px-2 py-0.5 rounded bg-amber-400 text-slate-950 font-black text-[9px] uppercase">SOUP &amp; INASAL</span>
                                    <h4 class="text-sm font-black mt-1 leading-tight">Authentic Pinoy Grill &amp; Comfort Bowls</h4>
                                    <p class="text-[10px] text-emerald-100 mt-0.5">Free Soup with every Chicken Inasal Meal</p>
                                    <button type="button" onclick="window.AlabIQ.openStoreModal('black-pinoy')" class="mt-2 px-3 py-1 rounded-full bg-[#F97316] text-white font-bold text-[10px] cursor-pointer">
                                        Order Now →
                                    </button>
                                </div>

                                <!-- Location & Search Inside Phone -->
                                <div class="flex items-center justify-between bg-slate-50 px-3 py-2 rounded-xl border border-slate-200/70">
                                    <div class="text-[10px]">
                                        <span class="text-slate-400 block">Deliver to</span>
                                        <span class="font-bold text-slate-800">Riyadh, Saudi Arabia ▾</span>
                                    </div>
                                    <span class="w-7 h-7 rounded-full bg-[#F97316] text-white flex items-center justify-center text-xs">🛒</span>
                                </div>

                                <!-- Mini Filter Pills -->
                                <div class="flex items-center gap-1.5 text-[10px] font-bold">
                                    <span class="px-2.5 py-1 rounded-full bg-[#F97316] text-white">All Stores</span>
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-600">Filipino</span>
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-600">Chinese</span>
                                </div>

                                <!-- Mini Store List Inside Phone -->
                                <div class="space-y-2">
                                    <div onclick="window.AlabIQ.openStoreModal('chowking')" class="p-2.5 rounded-2xl border border-slate-200/80 hover:border-orange-300 flex items-center gap-3 cursor-pointer transition">
                                        <div class="w-11 h-11 rounded-xl bg-[#E11D2E] text-white font-black text-xs flex items-center justify-center shrink-0">Ck</div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-extrabold text-slate-900 truncate">Chowking Riyadh</p>
                                            <p class="text-[10px] text-slate-500">Chinese • ★ 4.8 • 15–20 min</p>
                                            <p class="text-[10px] font-bold text-[#D91B24]">SAR 10 delivery</p>
                                        </div>
                                    </div>

                                    <div onclick="window.AlabIQ.openStoreModal('black-pinoy')" class="p-2.5 rounded-2xl border border-slate-200/80 hover:border-orange-300 flex items-center gap-3 cursor-pointer transition">
                                        <div class="w-11 h-11 rounded-xl bg-slate-900 text-amber-400 font-black text-[10px] flex items-center justify-center shrink-0 text-center leading-none p-1">BLACK PINOY</div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-extrabold text-slate-900 truncate">Black Pinoy Restaurant</p>
                                            <p class="text-[10px] text-slate-500">Filipino • ★ 4.9 • Open 24/7</p>
                                            <p class="text-[10px] font-bold text-[#D91B24]">SAR 10 delivery</p>
                                        </div>
                                    </div>

                                    <div onclick="window.AlabIQ.openStoreModal('happy-ending')" class="p-2.5 rounded-2xl border border-slate-200/80 hover:border-orange-300 flex items-center gap-3 cursor-pointer transition">
                                        <div class="w-11 h-11 rounded-xl bg-amber-500 text-slate-950 font-black text-[9px] flex items-center justify-center shrink-0 text-center leading-none p-1">HAPPY ENDING</div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-extrabold text-slate-900 truncate">Happy Ending Street Food</p>
                                            <p class="text-[10px] text-slate-500">Street Food • ★ 4.9 • Open 24/7</p>
                                            <p class="text-[10px] font-bold text-[#D91B24]">SAR 10 delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone Bottom Nav -->
                            <div class="px-4 py-2.5 border-t border-slate-100 bg-slate-50 flex items-center justify-around text-[10px] font-bold text-slate-400">
                                <span class="text-[#D91B24]">🏠 Home</span>
                                <span>🔍 Search</span>
                                <span>📋 Orders</span>
                                <span>👤 Profile</span>
                            </div>
                        </div>

                        <!-- Phone Screen Mode 2: Live GPS Map Tracking (Matches home2) -->
                        <div id="phone-screen-track" class="hidden bg-white rounded-[32px] overflow-hidden h-[500px] flex-col justify-between">
                            <div class="p-3.5 bg-slate-50 border-b border-slate-200/70 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold uppercase text-[#D91B24]">● LIVE ORDER TRACKING</span>
                                    <p class="text-xs font-black text-slate-900">Order #ALQ-8841 • 14 mins</p>
                                </div>
                                <span class="px-2.5 py-1 rounded-full bg-orange-100 text-[#D91B24] font-bold text-[10px]">On the Way</span>
                            </div>

                            <!-- Simulated Interactive Map Canvas -->
                            <div class="relative flex-1 bg-[#F8F5F0] overflow-hidden flex items-center justify-center p-4">
                                <div class="absolute inset-0 bg-grid-warm opacity-80"></div>
                                <!-- SVG Route Line -->
                                <svg class="w-full h-56 relative z-10" viewBox="0 0 240 180" fill="none">
                                    <path d="M30 145 C80 120, 140 85, 205 35" stroke="#F97316" stroke-width="4" stroke-dasharray="6 4" stroke-linecap="round"/>
                                    <path d="M30 145 C70 125, 110 100, 145 75" stroke="#D91B24" stroke-width="4" stroke-linecap="round"/>
                                    <!-- Store Origin Pin -->
                                    <circle cx="30" cy="145" r="8" fill="#D91B24"/>
                                    <circle cx="30" cy="145" r="3.5" fill="#FFF"/>
                                    <!-- Moving Rider Badge -->
                                    <circle cx="145" cy="75" r="13" fill="#0F131D"/>
                                    <text x="145" y="79" text-anchor="middle" font-size="12">🛵</text>
                                    <!-- Customer Destination Pin -->
                                    <circle cx="205" cy="35" r="9" fill="#F97316"/>
                                    <circle cx="205" cy="35" r="4" fill="#FFF"/>
                                </svg>
                                <div class="absolute top-3 left-3 bg-white/95 px-2.5 py-1.5 rounded-xl shadow-sm border border-slate-200/70 text-[10px]">
                                    <span class="font-bold text-slate-900">📍 Qurtubah District</span>
                                    <span class="block text-slate-400">2.4 km away</span>
                                </div>
                            </div>

                            <!-- Rider Card Inside Phone -->
                            <div class="p-3.5 bg-white border-t border-slate-200 space-y-2.5">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-9 h-9 rounded-full bg-red-50 text-[#D91B24] flex items-center justify-center font-bold text-sm">🛵</div>
                                        <div>
                                            <p class="text-xs font-extrabold text-slate-900">Capt. Khalid Al-Harbi</p>
                                            <p class="text-[10px] text-slate-500">AlabIQ Red Express • ★ 4.98</p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="window.AlabIQ.openOrdersDrawer()" class="px-3 py-1.5 rounded-full bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white font-bold text-[10px] cursor-pointer">
                                        Track Live
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Switchable Phone Preview Pills Below Phone (Exact match to reference screenshot) -->
                    <div class="mt-5 inline-flex items-center gap-1.5 p-1.5 rounded-full bg-white border border-slate-200 shadow-sm">
                        <button type="button" id="btn-phone-browse" onclick="switchPhoneTab('browse')" class="px-4 py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white shadow-xs transition cursor-pointer">
                            Browse
                        </button>
                        <button type="button" id="btn-phone-track" onclick="switchPhoneTab('track')" class="px-4 py-1.5 rounded-full text-xs font-bold text-slate-600 hover:text-slate-900 transition cursor-pointer">
                            Order Now &amp; Track
                        </button>
                        <a href="{{ url('/shop') }}" class="px-4 py-1.5 rounded-full text-xs font-bold text-slate-600 hover:text-[#D91B24] transition">
                            Full Shop →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR NEAR YOU SECTION -->
    <section class="py-14 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
            <div>
                <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">PARTNER STORES</p>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight mt-1">Popular near you</h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">Top-rated restaurants and 24/7 partner kitchens delivering across Riyadh right now.</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ url('/shop') }}" class="text-xs font-bold text-[#D91B24] hover:underline">View All in Shop →</a>
            </div>
        </div>

        @php
            $featuredStores = [
                ['id' => 'black-pinoy', 'name' => 'BLACK PINOY', 'cuisine' => 'Filipino', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'black-pinoy'],
                ['id' => 'chowking', 'name' => 'CHOWKING', 'cuisine' => 'Chinese', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chowking'],
                ['id' => 'chuchay-isabela', 'name' => 'CHUCHAY ISABELA SPECIAL...', 'cuisine' => 'Filipino', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chuchay'],
                ['id' => 'happy-ending', 'name' => 'HAPPY ENDING', 'cuisine' => 'Filipino', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'happy-ending'],
                ['id' => 'jollibee-riyadh', 'name' => 'JOLLIBEE', 'cuisine' => 'Filipino', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'jollibee'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach($featuredStores as $store)
                <div class="group bg-white rounded-2xl border border-slate-200/80 hover:border-[#F97316] shadow-2xs hover:shadow-xl transition duration-300 flex flex-col justify-between overflow-hidden">
                    <div class="p-4 relative bg-slate-50/60 border-b border-slate-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider {{ $store['badgeClass'] }}">
                                {{ $store['badge'] }}
                            </span>
                            <button type="button" data-alabiq-fav="{{ $store['id'] }}" onclick="window.AlabIQ.toggleFavorite('{{ $store['id'] }}', this)" class="w-7 h-7 rounded-full bg-white border border-slate-200 flex items-center justify-center shadow-2xs cursor-pointer">
                                ♥
                            </button>
                        </div>
                        <div onclick="window.AlabIQ.openStoreModal('{{ $store['id'] }}')" class="cursor-pointer py-2 group-hover:scale-105 transition duration-300">
                            @include('partials.store-artwork', ['type' => $store['logo']])
                        </div>
                    </div>
                    <div onclick="window.AlabIQ.openStoreModal('{{ $store['id'] }}')" class="p-4 cursor-pointer flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xs sm:text-sm font-black text-slate-950 uppercase truncate group-hover:text-[#D91B24] transition">{{ $store['name'] }}</h3>
                            <p class="text-[11px] text-slate-500 mt-0.5">{{ $store['cuisine'] }}</p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-slate-100 space-y-1 text-[11px] text-slate-500">
                            <div class="flex items-center gap-1.5 text-emerald-700 font-semibold">
                                <span>🕒</span>
                                <span>Open 24/7</span>
                            </div>
                            <p class="text-[10px] text-slate-500">From SAR 10.00 delivery • Min. SAR 30</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-7 flex flex-wrap items-center gap-4">
            <a href="{{ url('/shop') }}" class="px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-md transition">
                Explore All Stores →
            </a>
            <span class="text-xs text-slate-500">🚚 SAR 10.00 flat delivery within 15 km across Riyadh</span>
        </div>
    </section>

    <!-- CORE SERVICES SECTION ("Shop food, groceries & more delivered to your door.") -->
    <section class="py-16 bg-slate-50/80 border-y border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-xl mb-10">
                <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">WHAT WE DO</p>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight mt-1 leading-tight">
                    Shop food, groceries &amp; more<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">delivered to your door.</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1: Food Delivery -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#D91B24] to-[#F97316] text-white flex items-center justify-center text-xl shadow-md shadow-orange-500/20">🍴</span>
                            <span class="px-2.5 py-1 rounded-full bg-orange-50 text-[#D91B24] font-bold text-[10px] uppercase tracking-wider">24/7 Hot Meals</span>
                        </div>
                        <h3 class="text-lg font-extrabold text-slate-950">Food Delivery</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-2 leading-relaxed">
                            Order from hundreds of partner restaurants — from Filipino sizzling platters and Chinese Chao Fan to burgers, shawarma, and desserts.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ url('/shop?tab=restaurants') }}" class="inline-flex items-center gap-1.5 text-xs font-extrabold text-[#D91B24] hover:gap-2.5 transition-all">
                            <span>Order Food</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Groceries & Shop -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#F97316] to-amber-500 text-white flex items-center justify-center text-xl shadow-md shadow-amber-500/20">🛒</span>
                            <span class="px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 font-bold text-[10px] uppercase tracking-wider">Fresh &amp; Fast</span>
                        </div>
                        <h3 class="text-lg font-extrabold text-slate-950">Groceries &amp; Shop</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-2 leading-relaxed">
                            Skip the supermarket queues. Shop fresh produce, Asian pantry staples, bakery treats, and daily household essentials from Al Wafa &amp; Pinas Supermarket.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ url('/shop?tab=groceries') }}" class="inline-flex items-center gap-1.5 text-xs font-extrabold text-[#D91B24] hover:gap-2.5 transition-all">
                            <span>Shop Groceries</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Pick & Drop / Rides -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs hover:shadow-lg transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-slate-900 to-[#D91B24] text-white flex items-center justify-center text-xl shadow-md">🚖</span>
                            <span class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-700 font-bold text-[10px] uppercase tracking-wider">Upfront Fares</span>
                        </div>
                        <h3 class="text-lg font-extrabold text-slate-950">Pick &amp; Drop / Rides</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-2 leading-relaxed">
                            Send parcels across Riyadh with live rider tracking or book stress-free King Khalid International Airport transfers with upfront pricing.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button type="button" onclick="window.AlabIQ.openRideModal('Airport Transfer')" class="inline-flex items-center gap-1.5 text-xs font-extrabold text-[#D91B24] hover:gap-2.5 transition-all cursor-pointer">
                            <span>Book Ride or Courier</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Trusted Brand Partners Strip -->
            <div class="mt-14 text-center">
                <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316] mb-6">TRUSTED BY OUR BRAND PARTNERS</p>
                <div class="grid grid-cols-2 sm:grid-cols-5 gap-4 max-w-4xl mx-auto">
                    @foreach(['black-pinoy', 'chowking', 'chuchay', 'happy-ending', 'jollibee'] as $partnerLogo)
                        <div onclick="window.AlabIQ.openStoreModal('{{ $partnerLogo === 'chuchay' ? 'chuchay-isabela' : ($partnerLogo === 'jollibee' ? 'jollibee-riyadh' : $partnerLogo) }}')" class="bg-white rounded-2xl p-3 border border-slate-200/80 shadow-2xs hover:shadow-md hover:border-orange-300 transition cursor-pointer flex items-center justify-center scale-95 hover:scale-100">
                            <div class="scale-75 -my-4">
                                @include('partials.store-artwork', ['type' => $partnerLogo])
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- A FIRST LOOK AT ALABIQ (2 Promo Showcase Cards matching reference) -->
    <section class="py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">● PLATFORM SPOTLIGHT</p>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight mt-1">
                A first look at <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D91B24] to-[#F97316]">AlabIQ</span>
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-1.5">Built for speed, reliability, and everyday convenience across the Kingdom.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Showcase Card 1 -->
            <div class="rounded-3xl border border-slate-200/90 bg-white overflow-hidden shadow-xs hover:shadow-xl transition flex flex-col">
                <div class="h-60 bg-gradient-to-br from-[#991B1B] via-[#D91B24] to-[#F97316] p-6 relative flex items-center justify-between overflow-hidden text-white">
                    <div class="max-w-[58%] space-y-2 relative z-10">
                        <span class="px-2.5 py-0.5 rounded-full bg-white/20 text-[10px] font-bold uppercase tracking-wider">AlabIQ SuperApp</span>
                        <h3 class="text-2xl font-black leading-tight">All-in-One Delivery App</h3>
                        <p class="text-xs text-white/90">Food • Groceries • Express Parcel</p>
                        <div class="pt-1">
                            <span class="inline-block px-3 py-1 rounded-lg bg-black/30 text-[10px] font-semibold">www.alabiq.com</span>
                        </div>
                    </div>
                    <div class="w-36 h-48 rounded-2xl bg-white text-slate-900 p-2.5 shadow-2xl transform rotate-6 border-2 border-slate-900 flex flex-col justify-between shrink-0">
                        <div class="flex items-center justify-between">
                            <span class="text-[9px] font-black text-[#D91B24]">ALABIQ</span>
                            <span class="text-[9px] bg-orange-100 text-[#D91B24] px-1.5 rounded font-bold">24/7</span>
                        </div>
                        <div class="space-y-1.5 my-auto">
                            <div class="p-1.5 rounded-lg bg-orange-50 text-[9px] font-bold">🍗 Chicken Inasal • SAR 32</div>
                            <div class="p-1.5 rounded-lg bg-red-50 text-[9px] font-bold">🥟 Beef Chao Fan • SAR 29</div>
                            <div class="p-1.5 rounded-lg bg-emerald-50 text-[9px] font-bold">🥬 Fresh Basket • SAR 49</div>
                        </div>
                        <div class="py-1 rounded-md bg-[#D91B24] text-white text-[9px] font-bold text-center">Checkout Now</div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h4 class="text-base font-extrabold text-slate-950">All-in-One Delivery App</h4>
                        <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                            Browse menus, customize your meals, combine grocery essentials, and follow your AlabIQ Red Rider on a live map from kitchen to doorstep.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap gap-2">
                        <span class="px-2.5 py-1 rounded-full bg-orange-50 text-[#D91B24] text-[10px] font-bold">Restaurants</span>
                        <span class="px-2.5 py-1 rounded-full bg-orange-50 text-[#D91B24] text-[10px] font-bold">Groceries</span>
                        <span class="px-2.5 py-1 rounded-full bg-orange-50 text-[#D91B24] text-[10px] font-bold">Live Tracking</span>
                    </div>
                </div>
            </div>

            <!-- Showcase Card 2 -->
            <div class="rounded-3xl border border-slate-200/90 bg-white overflow-hidden shadow-xs hover:shadow-xl transition flex flex-col">
                <div class="h-60 bg-gradient-to-br from-[#450A0A] via-[#991B1B] to-[#D91B24] p-6 relative flex flex-col items-center justify-center text-center overflow-hidden text-white">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-300">✈️ AIRPORT &amp; CITY TRANSFERS</span>
                    <h3 class="text-xl font-black mt-1">Instant Fleet Selection</h3>
                    <div class="mt-4 bg-white/95 text-slate-900 rounded-2xl p-3 shadow-xl flex items-center gap-4 border border-white">
                        <div class="text-center px-2">
                            <span class="text-2xl block">🛵</span>
                            <span class="text-[10px] font-extrabold block mt-0.5">Courier</span>
                            <span class="text-[9px] text-[#D91B24] font-bold">SAR 22</span>
                        </div>
                        <div class="text-center px-3 py-1 rounded-xl bg-orange-50 border border-orange-200">
                            <span class="text-2xl block">🚗</span>
                            <span class="text-[10px] font-extrabold block mt-0.5">Sedan</span>
                            <span class="text-[9px] text-[#D91B24] font-bold">SAR 55</span>
                        </div>
                        <div class="text-center px-2">
                            <span class="text-2xl block">🚐</span>
                            <span class="text-[10px] font-extrabold block mt-0.5">Family SUV</span>
                            <span class="text-[9px] text-[#D91B24] font-bold">SAR 85</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h4 class="text-base font-extrabold text-slate-950">Airport Transfers &amp; Express Fleet</h4>
                        <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">
                            See your exact fare before you book. Choose between Moto Express for urgent parcels, Comfort Sedans, or spacious Airport SUVs.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100">
                        <button type="button" onclick="window.AlabIQ.openRideModal('Airport Transfer')" class="text-xs font-extrabold text-[#D91B24] hover:underline cursor-pointer">
                            Book an Airport Ride →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DARK FEATURE BANNER ("Watch AlabIQ work for you") -->
    <section class="py-16 bg-[#131926] bg-grid-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-6 space-y-4">
                    <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">BUILT FOR SPEED</p>
                    <h2 class="text-2xl sm:text-4xl font-black tracking-tight leading-tight">
                        Watch AlabIQ<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">work for you</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-lg">
                        From the moment you tap "Place Order", our smart dispatch connects your kitchen, nearest Red Rider, and doorstep into one live timeline.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-200 pt-2">
                        <li class="flex items-center gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-[#F97316]/20 text-[#F97316] flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Real-time GPS tracking from store prep to doorstep arrival</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-[#F97316]/20 text-[#F97316] flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Thermal insulated AlabIQ Red bags keep hot meals piping hot</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="w-5 h-5 rounded-full bg-[#F97316]/20 text-[#F97316] flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Dedicated 24/7 bilingual customer care in Riyadh</span>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-6">
                    <div class="relative rounded-3xl overflow-hidden border border-white/15 shadow-2xl group">
                        <img
                            src="https://images.unsplash.com/photo-1526367790999-0150786686a2?auto=format&fit=crop&w=1000&q=80"
                            alt="AlabIQ Delivery Rider in Action"
                            class="w-full h-72 sm:h-80 object-cover group-hover:scale-105 transition duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent flex flex-col justify-end p-6">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <span class="px-2.5 py-1 rounded-full bg-[#D91B24] text-white text-[10px] font-extrabold uppercase">WE DELIVERED</span>
                                    <h4 class="text-lg font-black text-white mt-1.5">AlabIQ Red Fleet • Riyadh</h4>
                                    <p class="text-xs text-slate-300">Average dispatch-to-doorstep under 22 minutes</p>
                                </div>
                                <button type="button" onclick="window.AlabIQ.openOrdersDrawer()" class="px-4 py-2.5 rounded-full bg-white text-slate-950 font-extrabold text-xs hover:bg-orange-50 transition shrink-0 cursor-pointer">
                                    Live Tracker Demo →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE 3-STEP WORKFLOW ("Your daily essentials, three easy steps.") -->
    <section id="how-it-works" class="py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
            <div>
                <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">HOW IT WORKS</p>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight mt-1">
                    Your daily essentials,<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">three easy steps.</span>
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">Switch steps below to preview how ordering &amp; live delivery work on AlabIQ.</p>
            </div>

            <!-- Interactive Step Switcher Pills -->
            <div class="flex flex-wrap items-center gap-2">
                <button type="button" onclick="switchWorkflowStep(1)" id="step-btn-1" class="px-4 py-2 rounded-full text-xs font-bold bg-orange-50 text-[#D91B24] border border-orange-300 cursor-pointer transition">
                    1. Browse Stores
                </button>
                <button type="button" onclick="switchWorkflowStep(2)" id="step-btn-2" class="px-4 py-2 rounded-full text-xs font-bold bg-white text-slate-600 border border-slate-200 hover:border-slate-300 cursor-pointer transition">
                    2. Customize &amp; Pay
                </button>
                <button type="button" onclick="switchWorkflowStep(3)" id="step-btn-3" class="px-4 py-2 rounded-full text-xs font-bold bg-white text-slate-600 border border-slate-200 hover:border-slate-300 cursor-pointer transition">
                    3. Track Live GPS
                </button>
                <button type="button" onclick="switchWorkflowStep(4)" id="step-btn-4" class="px-4 py-2 rounded-full text-xs font-bold bg-white text-slate-600 border border-slate-200 hover:border-slate-300 cursor-pointer transition">
                    4. Doorstep Delivery
                </button>
            </div>
        </div>

        <!-- Step Interactive Display Box -->
        <div class="rounded-3xl bg-white border border-slate-200/90 p-6 sm:p-10 shadow-sm">
            <div class="w-full h-1.5 rounded-full bg-slate-100 mb-8 overflow-hidden">
                <div id="workflow-progress-bar" class="h-full bg-gradient-to-r from-[#D91B24] to-[#F97316] transition-all duration-300" style="width: 25%"></div>
            </div>

            <div id="workflow-step-content" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-3">
                    <span class="px-3 py-1 rounded-full bg-orange-50 text-[#D91B24] text-[11px] font-extrabold uppercase">STEP 01 • DISCOVER</span>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-950">Browse 500+ restaurants &amp; partner supermarkets</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-xl">
                        Filter by Filipino, Chinese, Japanese, or Supermarket categories. View transparent delivery fees (starting at SAR 10.00 within 15 km) and real-time kitchen prep estimates.
                    </p>
                    <div class="pt-3 flex items-center gap-3">
                        <a href="{{ url('/shop') }}" class="px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] shadow-sm">
                            Open Marketplace →
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-slate-50 rounded-2xl p-5 border border-slate-200/70 flex items-center justify-around">
                    <div class="text-center">
                        <span class="w-12 h-12 rounded-2xl bg-white shadow-xs border border-slate-200 flex items-center justify-center text-2xl mx-auto">🍗</span>
                        <span class="text-xs font-bold text-slate-800 block mt-2">Hot Meals</span>
                    </div>
                    <div class="text-center">
                        <span class="w-12 h-12 rounded-2xl bg-white shadow-xs border border-slate-200 flex items-center justify-center text-2xl mx-auto">🥬</span>
                        <span class="text-xs font-bold text-slate-800 block mt-2">Groceries</span>
                    </div>
                    <div class="text-center">
                        <span class="w-12 h-12 rounded-2xl bg-white shadow-xs border border-slate-200 flex items-center justify-center text-2xl mx-auto">🚖</span>
                        <span class="text-xs font-bold text-slate-800 block mt-2">Airport Rides</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL / TIKTOK SPOTLIGHT SECTION -->
    <section id="social-spotlight" class="py-16 bg-slate-50/70 border-y border-slate-200/70">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-6">
                    <div onclick="window.AlabIQ.openStoreModal('happy-ending')" class="relative rounded-3xl overflow-hidden border border-slate-200 shadow-lg group cursor-pointer">
                        <img
                            src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=900&q=80"
                            alt="AlabIQ Food Reels"
                            class="w-full h-72 object-cover group-hover:scale-105 transition duration-500"
                        />
                        <div class="absolute inset-0 bg-black/35 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-white/95 text-[#D91B24] flex items-center justify-center text-xl shadow-xl group-hover:scale-110 transition">
                                ▶
                            </div>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs bg-black/50 backdrop-blur-xs px-3.5 py-2 rounded-xl">
                            <span class="font-bold">@alabiq.ksa • Pinoy Street Food Fiesta</span>
                            <span class="text-amber-300 font-bold">Order Dish →</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200/80 text-slate-700 text-[10px] font-extrabold uppercase">
                        <span>♪ TIKTOK &amp; REELS</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight leading-tight">
                        Watch the latest from<br />
                        <span class="text-[#F97316]">TikTok &amp; Social</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-md">
                        See behind-the-scenes kitchen prep, late-night street food cravings, and exclusive promo codes shared daily with our Riyadh community.
                    </p>
                    <div class="pt-1 flex items-center gap-3">
                        <button type="button" onclick="window.AlabIQ.applyPromo('ALABIQ20'); window.AlabIQ.openCartDrawer();" class="px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#F97316] to-[#D91B24] shadow-md cursor-pointer">
                            Claim TikTok Promo (ALABIQ20) →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US ("Who We Are — Empowering the Kingdom of Saudi Arabia's Daily Rhythm") -->
    <section id="about" class="py-16 lg:py-20 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">ABOUT ALABIQ</p>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 mt-1">Who We Are</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-6 space-y-4">
                <h3 class="text-2xl sm:text-3xl font-black text-slate-950 leading-tight">
                    Empowering the<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">Kingdom of Saudi Arabia's</span> Daily<br />
                    <span class="italic font-serif">Rhythm.</span>
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    <strong>AlabIQ — We DeliveRED</strong> connects busy families, professionals, and communities across Riyadh with the restaurants, supermarkets, and transport services they love most.
                </p>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Whether it's a 2 AM craving from Black Pinoy or Chowking, weekly groceries from Al Wafa Hypermarket, or an early-morning ride to King Khalid International Airport, we deliver with warmth and precision.
                </p>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-3xl bg-orange-50/70 border border-orange-200/80 p-6 sm:p-8 space-y-4">
                    <span class="text-[11px] font-extrabold uppercase tracking-widest text-[#D91B24]">OUR PROMISE • WE DELIVERED</span>
                    <p class="text-xs sm:text-sm font-medium text-slate-800 leading-relaxed">
                        "Our mission is simple: empower local partner kitchens and specialty stores with smart logistics while giving every customer transparent pricing, live GPS visibility, and dependable delivery."
                    </p>
                    <div class="pt-3 border-t border-orange-200/60 flex items-center justify-between text-xs">
                        <span class="font-extrabold text-slate-900">AlabIQ Operations • Riyadh, K.S.A</span>
                        <span class="text-[#D91B24] font-bold">Open 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ ACCORDION ("Know AlabIQ") -->
    <section id="faq" class="py-16 bg-slate-50/60 border-t border-slate-200/70">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-[11px] font-extrabold uppercase tracking-widest text-[#F97316]">FAQ</p>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 mt-1">
                    Know <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">AlabIQ</span>
                </h2>
                <p class="text-xs text-slate-500 mt-1">Everything you need to know about ordering food, groceries, and rides.</p>
            </div>

            <div class="space-y-3">
                @php
                    $faqs = [
                        ['q' => 'What is AlabIQ and what areas do you cover?', 'a' => 'AlabIQ is an all-in-one delivery and ride platform operating across Riyadh, Saudi Arabia (including Qurtubah, Olaya, Al Batha, Al Malaz, Sulaimaniyah, and King Khalid International Airport).'],
                        ['q' => 'What are the delivery fees and minimum order amounts?', 'a' => 'Standard delivery starts at SAR 10.00 within 15 km, with a minimum order of SAR 30.00 at partner restaurants and supermarkets. You can also use promo code FREEDEL or ALABIQ20 in your cart!'],
                        ['q' => 'Can I order from restaurants 24/7?', 'a' => 'Yes! Many of our top partner restaurants including Black Pinoy, Chowking, Chuchay Isabela, and Happy Ending are open 24/7 with live GPS rider tracking.'],
                        ['q' => 'How do I book an airport transfer or Pick & Drop courier?', 'a' => 'Click "Book a Ride" on our Services page or navigation menu, enter your pickup and destination, and see your upfront fixed fare immediately before confirming.'],
                    ];
                @endphp

                @foreach($faqs as $idx => $faq)
                    <details class="group bg-white rounded-2xl border border-slate-200/90 px-5 py-4 shadow-2xs" {{ $idx === 0 ? 'open' : '' }}>
                        <summary class="flex items-center justify-between gap-4 cursor-pointer list-none text-xs sm:text-sm font-extrabold text-slate-900">
                            <span>{{ $faq['q'] }}</span>
                            <span class="w-6 h-6 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-xs group-open:rotate-45 transition">+</span>
                        </summary>
                        <p class="text-xs text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
                            {{ $faq['a'] }}
                        </p>
                    </details>
                @endforeach
            </div>

            <p class="text-center text-xs text-slate-500 mt-6">
                Still have questions? <a href="mailto:customerservice@alabiq.com" class="text-[#F97316] font-bold hover:underline">Contact our 24/7 Support Team →</a>
            </p>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.modals')

    <script>
        function switchPhoneTab(mode) {
            const browseEl = document.getElementById('phone-screen-browse');
            const trackEl = document.getElementById('phone-screen-track');
            const btnBrowse = document.getElementById('btn-phone-browse');
            const btnTrack = document.getElementById('btn-phone-track');

            if (mode === 'track') {
                browseEl.classList.add('hidden');
                trackEl.classList.remove('hidden');
                trackEl.classList.add('flex');
                btnTrack.className = 'px-4 py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white shadow-xs transition cursor-pointer';
                btnBrowse.className = 'px-4 py-1.5 rounded-full text-xs font-bold text-slate-600 hover:text-slate-900 transition cursor-pointer';
            } else {
                trackEl.classList.add('hidden');
                trackEl.classList.remove('flex');
                browseEl.classList.remove('hidden');
                btnBrowse.className = 'px-4 py-1.5 rounded-full text-xs font-bold bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white shadow-xs transition cursor-pointer';
                btnTrack.className = 'px-4 py-1.5 rounded-full text-xs font-bold text-slate-600 hover:text-slate-900 transition cursor-pointer';
            }
        }

        function switchWorkflowStep(step) {
            const stepsData = {
                1: {
                    badge: 'STEP 01 • DISCOVER',
                    title: 'Browse 500+ restaurants & partner supermarkets',
                    desc: 'Filter by Filipino, Chinese, Japanese, or Supermarket categories. View transparent delivery fees (starting at SAR 10.00 within 15 km) and real-time kitchen prep estimates.',
                    progress: '25%'
                },
                2: {
                    badge: 'STEP 02 • CUSTOMIZE & CHECKOUT',
                    title: 'Add favorites to your cart & apply instant vouchers',
                    desc: 'Mix and match dishes, apply promo codes like ALABIQ20 or FREEDEL, and pay effortlessly with Cash on Delivery, Mada, or Apple Pay.',
                    progress: '50%'
                },
                3: {
                    badge: 'STEP 03 • LIVE GPS TRACKING',
                    title: 'Follow your AlabIQ Red Rider in real time',
                    desc: 'Watch every milestone from Order Confirmed and Kitchen Prep to your rider’s live route across Riyadh.',
                    progress: '75%'
                },
                4: {
                    badge: 'STEP 04 • WE DELIVERED',
                    title: 'Hot meals & fresh groceries right at your door',
                    desc: 'Receive your order in thermal-insulated AlabIQ bags and reorder your favorite meals anytime in one tap.',
                    progress: '100%'
                }
            };

            const data = stepsData[step] || stepsData[1];
            document.getElementById('workflow-progress-bar').style.width = data.progress;

            [1, 2, 3, 4].forEach(i => {
                const btn = document.getElementById('step-btn-' + i);
                if (!btn) return;
                if (i === step) {
                    btn.className = 'px-4 py-2 rounded-full text-xs font-bold bg-orange-50 text-[#D91B24] border border-orange-300 cursor-pointer transition';
                } else {
                    btn.className = 'px-4 py-2 rounded-full text-xs font-bold bg-white text-slate-600 border border-slate-200 hover:border-slate-300 cursor-pointer transition';
                }
            });

            const container = document.getElementById('workflow-step-content');
            if (container) {
                container.querySelector('span').textContent = data.badge;
                container.querySelector('h3').textContent = data.title;
                container.querySelector('p').textContent = data.desc;
            }
        }
    </script>
</body>
</html>
