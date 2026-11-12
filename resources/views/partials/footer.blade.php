<footer class="bg-[#0E121B] bg-grid-dark text-slate-300 border-t-2 border-[#D91B24] relative overflow-hidden">
    <!-- Subtle warm radial glow -->
    <div class="pointer-events-none absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-[#D91B24]/10 blur-3xl"></div>
    <div class="pointer-events-none absolute top-10 right-10 w-80 h-80 rounded-full bg-[#F97316]/10 blur-3xl"></div>

    <!-- Top App Download Banner -->
    <div class="border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div>
                <p class="text-[11px] font-extrabold tracking-widest uppercase text-[#F97316]">DOWNLOAD THE APP</p>
                <h3 class="text-xl sm:text-2xl font-black text-white mt-1 tracking-tight">
                    Fast delivery. <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">One smart app.</span>
                </h3>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <button type="button" onclick="window.AlabIQ.showToast('AlabIQ iOS App', 'Redirecting to App Store download preview...')" class="inline-flex items-center gap-3 px-4 py-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/15 transition cursor-pointer">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.96 6.33c.64-.78 1.08-1.86.96-2.94-.93.04-2.06.62-2.72 1.4-.58.68-1.1 1.79-.96 2.84 1.04.08 2.08-.52 2.72-1.3z"/></svg>
                    <div class="text-left leading-tight">
                        <span class="block text-[10px] text-slate-400">Download on the</span>
                        <span class="block text-xs font-bold text-white">App Store</span>
                    </div>
                </button>
                <button type="button" onclick="window.AlabIQ.showToast('AlabIQ Android App', 'Redirecting to Google Play Store download preview...')" class="inline-flex items-center gap-3 px-4 py-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/15 transition cursor-pointer">
                    <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 24 24"><path d="M3 20.5v-17c0-.83.94-1.3 1.6-.8l14 8.5c.6.37.6 1.23 0 1.6l-14 8.5c-.66.5-1.6.03-1.6-.8z"/></svg>
                    <div class="text-left leading-tight">
                        <span class="block text-[10px] text-slate-400">Get it on</span>
                        <span class="block text-xs font-bold text-white">Google Play</span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Footer Columns -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
            <!-- Brand Info -->
            <div class="lg:col-span-4 space-y-4">
                @include('partials.logo', ['theme' => 'dark', 'size' => 'md'])
                <p class="text-xs leading-relaxed text-slate-400 max-w-sm">
                    Order food, shop groceries, send packages, and book airport transfers — all in one app with real-time tracking and exclusive rewards across Riyadh.
                </p>
                <div class="flex items-center gap-2.5 pt-1">
                    <a href="#social" onclick="event.preventDefault(); window.AlabIQ.showToast('AlabIQ Social', 'Opening official Facebook page...')" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#D91B24] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition text-xs font-bold">f</a>
                    <a href="#social" onclick="event.preventDefault(); window.AlabIQ.showToast('AlabIQ Social', 'Opening official LinkedIn page...')" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#D91B24] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition text-xs font-bold">in</a>
                    <a href="#social" onclick="event.preventDefault(); window.AlabIQ.showToast('AlabIQ Social', 'Opening official Instagram page...')" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#D91B24] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition text-xs font-bold">IG</a>
                    <a href="#social" onclick="event.preventDefault(); window.AlabIQ.showToast('AlabIQ Social', 'Opening official TikTok channel...')" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#D91B24] border border-white/10 flex items-center justify-center text-slate-300 hover:text-white transition text-xs font-bold">♪</a>
                </div>
            </div>

            <!-- Explore -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-extrabold uppercase tracking-wider text-[#F97316]">EXPLORE</h4>
                <ul class="space-y-2.5 text-xs text-slate-300">
                    <li><a href="{{ url('/services') }}" class="hover:text-white transition">Our Services</a></li>
                    <li><a href="{{ url('/shop?tab=restaurants') }}" class="hover:text-white transition">Food Delivery</a></li>
                    <li><a href="{{ url('/shop?tab=groceries') }}" class="hover:text-white transition">Shop & Groceries</a></li>
                    <li><a href="#ride" onclick="event.preventDefault(); window.AlabIQ.openRideModal('Send a Package (Pick & Drop)')" class="hover:text-white transition">Pick & Drop</a></li>
                    <li><a href="{{ url('/#how-it-works') }}" class="hover:text-white transition">How It Works</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-extrabold uppercase tracking-wider text-[#F97316]">COMPANY</h4>
                <ul class="space-y-2.5 text-xs text-slate-300">
                    <li><a href="{{ url('/#about') }}" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#careers" onclick="event.preventDefault(); window.AlabIQ.showToast('Join AlabIQ Riders & Team', 'Rider & partner applications are open 24/7!')" class="hover:text-white transition">Careers</a></li>
                    <li><a href="{{ url('/#social-spotlight') }}" class="hover:text-white transition">Blog & Reels</a></li>
                    <li><a href="{{ url('/services#partners') }}" class="hover:text-white transition">Partners</a></li>
                    <li><a href="{{ url('/#faq') }}" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="#support" onclick="event.preventDefault(); window.AlabIQ.showToast('24/7 Live Support', 'Connecting you to AlabIQ Customer Care...')" class="hover:text-white transition">Customer Service</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="lg:col-span-4 space-y-3">
                <h4 class="text-xs font-extrabold uppercase tracking-wider text-[#F97316]">CONTACT</h4>
                <ul class="space-y-3 text-xs text-slate-300">
                    <li class="flex items-start gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0 mt-0.5">📍</span>
                        <span>Airport Road, Qurtubah, Riyadh 13244<br/>Business Gate, Riyadh, K.S.A</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0">✉️</span>
                        <a href="mailto:customerservice@alabiq.com" class="hover:text-white transition">customerservice@alabiq.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0">📞</span>
                        <span>+966 56 176 6883</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0">💬</span>
                        <span>WhatsApp +966 56 176 6883</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0">🌐</span>
                        <span>www.alabiq.com</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#F97316]/15 text-[#F97316] flex items-center justify-center shrink-0">🕒</span>
                        <span>Daily, 7 AM – Midnight (24/7 Partner Stores)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-400">
            <p>© 2026 <span class="text-[#F97316] font-bold">AlabIQ — We DeliveRED</span>. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#privacy" onclick="event.preventDefault(); window.AlabIQ.showToast('Privacy Policy', 'Your data is protected under KSA PDPL standards.')" class="hover:text-white transition">Privacy Policy</a>
                <a href="#terms" onclick="event.preventDefault(); window.AlabIQ.showToast('Terms of Service', 'Standard AlabIQ platform terms apply.')" class="hover:text-white transition">Terms of Service</a>
                <a href="#cookies" onclick="event.preventDefault(); window.AlabIQ.showToast('Cookie Preferences', 'Preferences saved.')" class="hover:text-white transition">Cookie Preferences</a>
            </div>
        </div>
    </div>
</footer>
