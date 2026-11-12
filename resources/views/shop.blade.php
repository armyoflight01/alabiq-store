<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlabIQ Shop — Restaurants, Groceries & Partner Stores | We DeliveRED</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] text-slate-900 antialiased pb-16 md:pb-0 selection:bg-[#D91B24] selection:text-white">

    <!-- TOP MARKETPLACE HEADER (Exact match to media_1794388118032_ad142c0c.png) -->
    <header class="sticky top-0 z-50 bg-white border-b border-slate-200/80 shadow-2xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between gap-3 sm:gap-6">
            <!-- Left: Brand Logo + Delivery Location Pill -->
            <div class="flex items-center gap-3 sm:gap-5 shrink-0">
                @include('partials.logo', ['theme' => 'light', 'subtitle' => 'Food. Groceries. Delivered.'])

                <button
                    type="button"
                    onclick="window.AlabIQ.openAddressModal()"
                    class="hidden md:inline-flex items-center gap-2.5 px-3.5 py-2 rounded-full bg-slate-50 hover:bg-orange-50/60 border border-slate-200/90 hover:border-orange-300 transition cursor-pointer text-left"
                >
                    <span class="text-[#F97316] text-sm">📍</span>
                    <div class="leading-tight">
                        <span class="block text-[10px] text-slate-400 font-semibold">Deliver to</span>
                        <span data-alabiq-address class="block text-xs font-extrabold text-slate-900 max-w-[150px] truncate">Riyadh, Saudi Arabia</span>
                    </div>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>

            <!-- Center: Search Input -->
            <div class="flex-1 max-w-xl">
                <div class="relative flex items-center">
                    <input
                        type="text"
                        data-alabiq-search
                        value="{{ request('q') }}"
                        placeholder="Search restaurants, dishes, groceries and more..."
                        class="w-full pl-4 pr-10 py-2.5 rounded-full bg-slate-100/90 focus:bg-white border border-transparent focus:border-[#F97316] text-xs sm:text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none transition"
                    />
                    <svg class="w-4 h-4 text-slate-400 absolute right-3.5 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Right: Orders + Orange Cart Circle + Log in -->
            <div class="flex items-center gap-2 sm:gap-4 shrink-0">
                <button
                    type="button"
                    onclick="window.AlabIQ.openOrdersDrawer()"
                    class="hidden sm:inline-flex items-center gap-1.5 px-3 py-2 rounded-full text-xs font-bold text-slate-700 hover:bg-slate-100 transition cursor-pointer"
                >
                    <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span>Orders</span>
                </button>

                <button
                    type="button"
                    onclick="window.AlabIQ.openCartDrawer()"
                    class="relative w-10 h-10 rounded-full bg-gradient-to-r from-[#F97316] to-[#D91B24] text-white flex items-center justify-center shadow-md shadow-orange-500/25 hover:opacity-95 transition cursor-pointer"
                    title="View Shopping Cart"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span data-alabiq-cart-count class="absolute -top-1 -right-1 min-w-[18px] h-[18px] px-1 rounded-full bg-slate-950 text-white text-[10px] font-black flex items-center justify-center border-2 border-white">0</span>
                </button>

                <div data-alabiq-auth-guest>
                    <a href="{{ url('/login') }}" class="text-xs sm:text-sm font-extrabold text-slate-800 hover:text-[#D91B24] transition">
                        Log in
                    </a>
                </div>

                <div data-alabiq-auth-user class="hidden items-center gap-2">
                    <span data-alabiq-user-name class="text-xs font-extrabold text-[#D91B24]">Member</span>
                    <button type="button" onclick="window.AlabIQ.logoutUser()" class="text-[11px] text-slate-400 hover:text-red-600 cursor-pointer">Exit</button>
                </div>
            </div>
        </div>

        <!-- CATEGORY SUB-NAVBAR -->
        <div class="border-t border-slate-100 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-6 overflow-x-auto no-scrollbar text-xs font-bold">
                <a href="{{ url('/') }}" class="py-3 text-slate-600 hover:text-slate-900 flex items-center gap-1.5 whitespace-nowrap border-b-2 border-transparent">
                    <span>🏠</span>
                    <span>Home</span>
                </a>
                <button type="button" onclick="switchShopTab('all', this)" class="shop-subnav-tab py-3 text-[#D91B24] border-b-2 border-[#F97316] flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                    <span>🍴</span>
                    <span>Restaurants</span>
                </button>
                <button type="button" onclick="switchShopTab('groceries', this)" class="shop-subnav-tab py-3 text-slate-600 hover:text-slate-900 border-b-2 border-transparent flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                    <span>🛍️</span>
                    <span>Groceries</span>
                </button>
                <button type="button" onclick="switchShopTab('shops', this)" class="shop-subnav-tab py-3 text-slate-600 hover:text-slate-900 border-b-2 border-transparent flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                    <span>🏪</span>
                    <span>Shops</span>
                </button>
                <button type="button" onclick="switchShopTab('deals', this)" class="shop-subnav-tab py-3 text-slate-600 hover:text-slate-900 border-b-2 border-transparent flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                    <span>🏷️</span>
                    <span>Deals</span>
                </button>
                <button type="button" onclick="switchShopTab('all', this)" class="shop-subnav-tab py-3 text-slate-600 hover:text-slate-900 border-b-2 border-transparent flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                    <span>☆</span>
                    <span>New &amp; Trending</span>
                </button>
            </div>
        </div>
    </header>

    <!-- MAIN MARKETPLACE CONTENT -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 space-y-10">

        <!-- TOP HERO & SIDEBAR ROW -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

            <!-- Left 8 Columns: Hero Banner + Popular Categories -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Main Hero Split Banner ("Your favorites, delivered fast.") -->
                <div class="rounded-3xl bg-[#FFF6EE] border border-orange-200/60 overflow-hidden shadow-xs relative grid grid-cols-1 md:grid-cols-12 min-h-[250px]">
                    <!-- Text Content -->
                    <div class="md:col-span-7 p-6 sm:p-8 flex flex-col justify-between relative z-10">
                        <div class="space-y-2.5">
                            <h1 class="text-2xl sm:text-3xl lg:text-[32px] font-black text-slate-950 tracking-tight leading-[1.12]">
                                Your favorites, delivered fast.
                            </h1>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-md">
                                Discover top restaurants with live tracking and exclusive partner picks, all in one tap.
                            </p>
                        </div>

                        <!-- 3 White Feature Pills -->
                        <div class="flex flex-wrap items-center gap-2 pt-5">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white border border-orange-200/70 text-[11px] font-bold text-slate-800 shadow-2xs">
                                <span class="text-[#F97316]">🕒</span>
                                <span>15–25 min Avg. Delivery</span>
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white border border-orange-200/70 text-[11px] font-bold text-slate-800 shadow-2xs">
                                <span class="text-[#F97316]">🏷️</span>
                                <span>From SAR 10 Delivery Fee</span>
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white border border-orange-200/70 text-[11px] font-bold text-slate-800 shadow-2xs">
                                <span class="text-[#D91B24]">📍</span>
                                <span>Live Tracking</span>
                            </span>
                        </div>
                    </div>

                    <!-- Right Orange Curve + Food Photo -->
                    <div class="md:col-span-5 relative bg-gradient-to-br from-[#F97316] to-[#D91B24] md:rounded-l-[120px] p-5 flex items-center justify-center min-h-[200px]">
                        <!-- Little Scooter Graphic at Bottom-Left Edge -->
                        <div class="hidden md:flex absolute -left-5 bottom-4 w-11 h-11 rounded-2xl bg-white shadow-lg border border-orange-200 items-center justify-center text-xl">
                            🛵
                        </div>
                        <div class="w-full h-44 sm:h-48 rounded-2xl overflow-hidden shadow-2xl border-4 border-white/90">
                            <img
                                src="https://images.unsplash.com/photo-1621996346565-e3d5d6281298?auto=format&fit=crop&w=800&q=80"
                                alt="Delicious Pasta & Hot Meals"
                                class="w-full h-full object-cover"
                            />
                        </div>
                    </div>
                </div>

                <!-- Popular Categories Section -->
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-base sm:text-lg font-black text-slate-950 tracking-tight">Popular Categories</h2>
                        <div class="flex items-center gap-1.5">
                            <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'all')" class="px-3 py-1 rounded-full border border-slate-200 hover:border-orange-300 text-[11px] font-bold text-slate-600 cursor-pointer">
                                Show All
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center gap-3.5 overflow-x-auto no-scrollbar pb-2">
                        @php
                            $categories = [
                                ['key' => 'Chinese', 'label' => 'Chinese', 'img' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=300&q=80'],
                                ['key' => 'Filipino', 'label' => 'Filipino', 'img' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=300&q=80'],
                                ['key' => 'Japanese', 'label' => 'Japanese', 'img' => 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=300&q=80'],
                                ['key' => 'Groceries', 'label' => 'Groceries', 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=300&q=80'],
                                ['key' => 'Shops', 'label' => 'Specialty', 'img' => 'https://images.unsplash.com/photo-1604719312566-8912e9227c6a?auto=format&fit=crop&w=300&q=80'],
                            ];
                        @endphp

                        @foreach($categories as $cat)
                            <button
                                type="button"
                                data-cat-pill="{{ $cat['key'] }}"
                                onclick="window.AlabIQ.filterStoreCards('', '{{ $cat['key'] }}')"
                                class="w-28 sm:w-32 shrink-0 p-3.5 rounded-2xl bg-white border border-slate-200/80 hover:border-[#F97316] shadow-2xs hover:shadow-md transition flex flex-col items-center text-center cursor-pointer group"
                            >
                                <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-slate-100 group-hover:scale-105 transition shadow-xs">
                                    <img src="{{ $cat['img'] }}" alt="{{ $cat['label'] }}" class="w-full h-full object-cover" />
                                </div>
                                <span class="text-xs font-extrabold text-slate-900 mt-2.5">{{ $cat['label'] }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right 4 Columns: Exclusive Offer + Green Fee Pill + Recent Orders + Explore More -->
            <div class="lg:col-span-4 space-y-3.5">
                <!-- Card 1: Exclusive Offer — Black Pinoy -->
                <div class="rounded-3xl bg-[#FFF0E5] border border-orange-200/80 p-5 flex items-center justify-between gap-4 relative overflow-hidden">
                    <div class="space-y-1.5 z-10">
                        <p class="text-[10px] font-extrabold uppercase tracking-widest text-[#F97316]">EXCLUSIVE OFFER</p>
                        <h3 class="text-xl font-black text-slate-950 leading-tight uppercase">BLACK<br />PINOY</h3>
                        <p class="text-xs text-slate-500">Popular</p>
                        <div class="pt-1.5">
                            <button
                                type="button"
                                onclick="window.AlabIQ.openStoreModal('black-pinoy')"
                                class="px-4 py-2 rounded-full bg-gradient-to-r from-[#F97316] to-[#D91B24] text-white text-xs font-bold shadow-sm hover:opacity-95 transition cursor-pointer"
                            >
                                Order Now →
                            </button>
                        </div>
                    </div>
                    <div onclick="window.AlabIQ.openStoreModal('black-pinoy')" class="w-28 h-28 rounded-2xl bg-white p-1.5 shadow-md shrink-0 flex items-center justify-center cursor-pointer hover:scale-105 transition">
                        <div class="scale-75">
                            @include('partials.store-artwork', ['type' => 'black-pinoy'])
                        </div>
                    </div>
                </div>

                <!-- Card 2: Green Delivery Fee Badge -->
                <div class="rounded-2xl bg-emerald-50/90 border border-emerald-200/80 px-4 py-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-emerald-500/15 text-emerald-700 flex items-center justify-center text-sm font-bold">🚲</span>
                    <span class="text-xs font-extrabold text-emerald-950">From SAR 10.00 within 15 km</span>
                </div>

                <!-- Card 3: Your Recent Orders -->
                <div class="rounded-2xl bg-white border border-slate-200/90 p-4 shadow-2xs space-y-1.5">
                    <h4 class="text-xs sm:text-sm font-black text-slate-950">Your Recent Orders</h4>
                    <div id="alabiq-recent-orders-widget">
                        <p class="text-xs text-slate-500">
                            <a href="{{ url('/login') }}" class="text-[#F97316] font-extrabold hover:underline">Sign in</a> to reorder from your last meals, or <button type="button" onclick="window.AlabIQ.openOrdersDrawer()" class="text-[#D91B24] font-bold hover:underline cursor-pointer">view active order tracker</button>.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Explore More -->
                <div class="space-y-2.5 pt-1">
                    <h4 class="text-xs sm:text-sm font-black text-slate-950">Explore More</h4>
                    <div class="grid grid-cols-3 gap-2.5">
                        <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'groceries')" class="p-3.5 rounded-2xl bg-white border border-slate-200/90 hover:border-emerald-400 shadow-2xs flex flex-col items-center text-center cursor-pointer transition group">
                            <span class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-base group-hover:scale-110 transition">🛍️</span>
                            <span class="text-xs font-extrabold text-slate-900 mt-2">Groceries</span>
                        </button>
                        <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'shops')" class="p-3.5 rounded-2xl bg-white border border-slate-200/90 hover:border-purple-400 shadow-2xs flex flex-col items-center text-center cursor-pointer transition group">
                            <span class="w-9 h-9 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-base group-hover:scale-110 transition">🏪</span>
                            <span class="text-xs font-extrabold text-slate-900 mt-2">Shops</span>
                        </button>
                        <button type="button" onclick="window.AlabIQ.applyPromo('ALABIQ20'); window.AlabIQ.openCartDrawer();" class="p-3.5 rounded-2xl bg-white border border-slate-200/90 hover:border-rose-400 shadow-2xs flex flex-col items-center text-center cursor-pointer transition group">
                            <span class="w-9 h-9 rounded-xl bg-rose-50 text-[#D91B24] flex items-center justify-center text-base font-black group-hover:scale-110 transition">%</span>
                            <span class="text-xs font-extrabold text-slate-900 mt-2">Deals</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- POPULAR NEAR YOU STORE GRID -->
        <section class="pt-2">
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h2 class="text-lg sm:text-xl font-black text-slate-950 tracking-tight">Popular Near You</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Click any restaurant or supermarket card to open its menu and add items to your cart.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'all')" class="w-8 h-8 rounded-full border border-slate-200 bg-white hover:bg-slate-50 flex items-center justify-center text-slate-500 text-xs cursor-pointer">‹</button>
                    <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'all')" class="w-8 h-8 rounded-full border border-slate-200 bg-white hover:bg-slate-50 flex items-center justify-center text-slate-500 text-xs cursor-pointer">›</button>
                </div>
            </div>

            @php
                $allShopStores = [
                    ['id' => 'black-pinoy', 'name' => 'BLACK PINOY', 'cuisine' => 'Filipino', 'type' => 'restaurants', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'black-pinoy'],
                    ['id' => 'chowking', 'name' => 'CHOWKING', 'cuisine' => 'Chinese', 'type' => 'restaurants', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chowking'],
                    ['id' => 'chuchay-isabela', 'name' => 'CHUCHAY ISABELA SPE...', 'cuisine' => 'Filipino', 'type' => 'restaurants', 'badge' => 'NEW', 'badgeClass' => 'bg-emerald-500 text-white', 'logo' => 'chuchay'],
                    ['id' => 'happy-ending', 'name' => 'HAPPY ENDING', 'cuisine' => 'Filipino', 'type' => 'restaurants', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'happy-ending'],
                    ['id' => 'jollibee-riyadh', 'name' => 'JOLLIBEE RIYADH', 'cuisine' => 'Filipino', 'type' => 'restaurants', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'jollibee'],
                    ['id' => 'sakura-tokyo', 'name' => 'SAKURA RAMEN & SUSHI', 'cuisine' => 'Japanese', 'type' => 'deals', 'badge' => '20% DEAL', 'badgeClass' => 'bg-[#D91B24] text-white', 'logo' => 'other'],
                    ['id' => 'al-wafa-hypermarket', 'name' => 'AL WAFA HYPERMARKET', 'cuisine' => 'Groceries', 'type' => 'groceries', 'badge' => 'POPULAR', 'badgeClass' => 'bg-[#F97316] text-white', 'logo' => 'al-wafa'],
                    ['id' => 'pinas-supermarket', 'name' => 'PINAS SUPERMARKET', 'cuisine' => 'Groceries', 'type' => 'shops', 'badge' => 'FEATURED', 'badgeClass' => 'bg-rose-500 text-white', 'logo' => 'pinas'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach($allShopStores as $store)
                    <div
                        data-store-card
                        data-store-name="{{ $store['name'] }}"
                        data-store-cuisine="{{ $store['cuisine'] }}"
                        data-store-type="{{ $store['type'] }}"
                        class="group bg-white rounded-2xl border border-slate-200/90 hover:border-[#F97316] shadow-2xs hover:shadow-xl transition duration-300 flex flex-col justify-between overflow-hidden"
                    >
                        <div class="p-4 bg-slate-50/50 border-b border-slate-100 relative">
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider {{ $store['badgeClass'] }}">
                                    {{ $store['badge'] }}
                                </span>
                                <button
                                    type="button"
                                    data-alabiq-fav="{{ $store['id'] }}"
                                    onclick="window.AlabIQ.toggleFavorite('{{ $store['id'] }}', this)"
                                    class="w-7 h-7 rounded-full bg-white border border-slate-200 flex items-center justify-center shadow-2xs cursor-pointer"
                                >
                                    ♥
                                </button>
                            </div>
                            <div onclick="window.AlabIQ.openStoreModal('{{ $store['id'] }}')" class="py-2 cursor-pointer group-hover:scale-105 transition duration-300">
                                @include('partials.store-artwork', ['type' => $store['logo']])
                            </div>
                        </div>

                        <div onclick="window.AlabIQ.openStoreModal('{{ $store['id'] }}')" class="p-4 cursor-pointer flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm font-black text-slate-950 uppercase truncate group-hover:text-[#D91B24] transition">{{ $store['name'] }}</h3>
                                <p class="text-xs text-slate-500 mt-0.5">{{ $store['cuisine'] }}</p>
                            </div>

                            <div class="mt-3 pt-3 border-t border-slate-100 space-y-1">
                                <div class="flex items-center justify-between text-xs">
                                    <span class="text-slate-600 font-medium flex items-center gap-1">🕒 Open 24/7</span>
                                    <span class="text-xs font-extrabold text-[#D91B24] group-hover:translate-x-0.5 transition">View Menu →</span>
                                </div>
                                <p class="text-[11px] text-slate-500">From SAR 10.00 delivery • Min. SAR 30</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty Search State -->
            <div id="alabiq-empty-filter-state" class="hidden text-center py-12 bg-slate-50 rounded-3xl border border-slate-200 mt-4">
                <p class="text-base font-bold text-slate-800">No matching stores found</p>
                <p class="text-xs text-slate-500 mt-1">Try searching for Black Pinoy, Chowking, Filipino, Chinese, or Groceries.</p>
                <button type="button" onclick="window.AlabIQ.filterStoreCards('', 'all')" class="mt-4 px-4 py-2 rounded-full bg-[#D91B24] text-white text-xs font-bold cursor-pointer">
                    Reset Filters
                </button>
            </div>
        </section>

    </main>

    @include('partials.footer')
    @include('partials.modals')

    <script>
        function switchShopTab(type, btnEl) {
            document.querySelectorAll('.shop-subnav-tab').forEach(el => {
                el.className = 'shop-subnav-tab py-3 text-slate-600 hover:text-slate-900 border-b-2 border-transparent flex items-center gap-1.5 whitespace-nowrap cursor-pointer';
            });
            if (btnEl) {
                btnEl.className = 'shop-subnav-tab py-3 text-[#D91B24] border-b-2 border-[#F97316] flex items-center gap-1.5 whitespace-nowrap cursor-pointer';
            }
            window.AlabIQ.filterStoreCards('', type);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const tab = params.get('tab');
            const q = params.get('q');
            if (tab) {
                window.AlabIQ.filterStoreCards('', tab);
            }
            if (q) {
                window.AlabIQ.filterStoreCards(q.toLowerCase(), null);
            }
        });
    </script>
</body>
</html>
