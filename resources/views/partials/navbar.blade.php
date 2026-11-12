@php
    $active = $active ?? 'home';
@endphp

<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between gap-4">
        <!-- Brand Logo -->
        @include('partials.logo', ['theme' => 'light', 'size' => 'md'])

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-1 xl:gap-2 text-xs font-semibold text-slate-700">
            <a href="{{ url('/') }}" class="px-3.5 py-2 rounded-full transition {{ $active === 'home' ? 'bg-orange-50 text-[#D91B24] font-bold border border-orange-200/80' : 'hover:text-[#D91B24] hover:bg-slate-50' }}">
                Home
            </a>
            <a href="{{ url('/services') }}" class="px-3.5 py-2 rounded-full transition {{ $active === 'services' ? 'bg-orange-50 text-[#D91B24] font-bold border border-orange-200/80' : 'hover:text-[#D91B24] hover:bg-slate-50' }}">
                Services
            </a>
            <a href="{{ url('/shop') }}" class="px-3.5 py-2 rounded-full transition {{ $active === 'shop' ? 'bg-orange-50 text-[#D91B24] font-bold border border-orange-200/80' : 'hover:text-[#D91B24] hover:bg-slate-50' }}">
                Shop & Menu
            </a>
            <a href="{{ url('/#how-it-works') }}" class="px-3.5 py-2 rounded-full hover:text-[#D91B24] hover:bg-slate-50 transition">
                How It Works
            </a>
            <a href="{{ url('/#about') }}" class="px-3.5 py-2 rounded-full hover:text-[#D91B24] hover:bg-slate-50 transition">
                About
            </a>
            <a href="{{ url('/#faq') }}" class="px-3.5 py-2 rounded-full hover:text-[#D91B24] hover:bg-slate-50 transition">
                FAQ
            </a>
            <a href="#contact-footer" onclick="document.querySelector('footer')?.scrollIntoView({behavior:'smooth'}); return false;" class="px-3.5 py-2 rounded-full hover:text-[#D91B24] hover:bg-slate-50 transition">
                Contact
            </a>
        </nav>

        <!-- Right Action Controls -->
        <div class="flex items-center gap-2 sm:gap-3">
            <!-- Cart Button -->
            <button type="button" onclick="window.AlabIQ.openCartDrawer()" class="relative w-10 h-10 rounded-full bg-orange-50 hover:bg-orange-100 border border-orange-200/80 text-[#D91B24] flex items-center justify-center transition cursor-pointer" title="Open Cart">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span data-alabiq-cart-count class="absolute -top-1 -right-1 min-w-[18px] h-[18px] px-1 rounded-full bg-[#D91B24] text-white text-[10px] font-black flex items-center justify-center shadow-xs">0</span>
            </button>

            <!-- Guest Links -->
            <div data-alabiq-auth-guest class="hidden sm:flex items-center gap-2">
                <a href="{{ url('/login') }}" class="px-3 py-2 text-xs font-bold text-slate-700 hover:text-[#D91B24] transition">
                    Log in
                </a>
                <a href="{{ url('/shop') }}" class="px-4 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-md shadow-orange-500/20 transition">
                    Order Now
                </a>
                <a href="{{ url('/register') }}" class="hidden xl:inline-flex px-3 py-2 text-xs font-bold text-slate-700 hover:text-[#D91B24] transition">
                    Sign up
                </a>
            </div>

            <!-- Logged-in User Pill -->
            <div data-alabiq-auth-user class="hidden items-center gap-2">
                <button type="button" onclick="window.AlabIQ.openOrdersDrawer()" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-orange-50 border border-orange-200 text-xs font-bold text-slate-800 cursor-pointer">
                    <span class="w-5 h-5 rounded-full bg-[#D91B24] text-white text-[10px] flex items-center justify-center">👤</span>
                    <span data-alabiq-user-name>Member</span>
                </button>
                <a href="{{ url('/shop') }}" class="hidden sm:inline-flex px-4 py-2 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] shadow-xs">
                    Order Now
                </a>
                <button type="button" onclick="window.AlabIQ.logoutUser()" class="text-[11px] font-semibold text-slate-400 hover:text-red-600 cursor-pointer px-1">
                    Sign out
                </button>
            </div>

            <!-- Mobile Menu Toggle -->
            <button type="button" onclick="document.getElementById('alabiq-mobile-menu').classList.toggle('hidden')" class="lg:hidden w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-700 hover:bg-slate-50 cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile / Tablet Collapsible Menu -->
    <div id="alabiq-mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 py-4 space-y-3 shadow-xl">
        <div class="grid grid-cols-2 gap-2 text-xs font-bold">
            <a href="{{ url('/') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">🏠 Home</a>
            <a href="{{ url('/shop') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">🍔 Shop & Restaurants</a>
            <a href="{{ url('/services') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">🛵 Our Services</a>
            <a href="{{ url('/#how-it-works') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">⚡ How It Works</a>
            <a href="{{ url('/#about') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">🏢 About AlabIQ</a>
            <a href="{{ url('/#faq') }}" class="px-3.5 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-50 text-slate-800">❓ FAQ</a>
        </div>
        <div class="pt-2 border-t border-slate-100 flex items-center justify-between gap-2">
            <a href="{{ url('/login') }}" class="flex-1 text-center py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-700">Log In</a>
            <a href="{{ url('/register') }}" class="flex-1 text-center py-2.5 rounded-xl border border-orange-200 bg-orange-50 text-xs font-bold text-[#D91B24]">Sign Up</a>
            <a href="{{ url('/shop') }}" class="flex-1 text-center py-2.5 rounded-xl bg-gradient-to-r from-[#D91B24] to-[#F97316] text-xs font-bold text-white">Order Now</a>
        </div>
    </div>
</header>
