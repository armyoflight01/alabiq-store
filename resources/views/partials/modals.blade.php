<!-- Toast Notification Stack -->
<div id="alabiq-toast-container" class="fixed bottom-20 sm:bottom-6 right-4 sm:right-6 z-[90] flex flex-col gap-2.5 pointer-events-none"></div>

<!-- Store Menu & Product Ordering Modal -->
<div id="alabiq-store-modal" class="hidden fixed inset-0 z-[70] flex items-center justify-center p-2 sm:p-4 bg-slate-950/70 backdrop-blur-xs">
    <div class="w-full max-w-4xl rounded-3xl bg-white shadow-2xl overflow-hidden border border-slate-200 animate-in fade-in zoom-in-95 duration-200">
        <div id="alabiq-store-modal-body"></div>
    </div>
</div>

<!-- Shopping Cart & Checkout Slide-over Drawer -->
<div id="alabiq-cart-drawer" class="hidden fixed inset-0 z-[75] flex justify-end bg-slate-950/60 backdrop-blur-xs">
    <div class="w-full max-w-md bg-white h-full shadow-2xl flex flex-col justify-between border-l border-slate-200">
        <div class="px-5 py-4 border-b border-slate-200 flex items-center justify-between bg-slate-50">
            <div class="flex items-center gap-2.5">
                <span class="w-9 h-9 rounded-full bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white flex items-center justify-center text-sm font-bold shadow-xs">🛒</span>
                <div>
                    <h3 class="text-sm font-extrabold text-slate-900">Your AlabIQ Cart</h3>
                    <p class="text-[11px] text-slate-500">Fast doorstep delivery • Live GPS tracking</p>
                </div>
            </div>
            <button type="button" onclick="window.AlabIQ.closeCartDrawer()" class="w-8 h-8 rounded-full bg-slate-200/70 hover:bg-slate-300 text-slate-700 flex items-center justify-center text-xs font-bold cursor-pointer">
                ✕
            </button>
        </div>
        <div id="alabiq-cart-drawer-body" class="flex-1 flex flex-col overflow-hidden"></div>
    </div>
</div>

<!-- Live Orders & Tracking Slide-over Drawer -->
<div id="alabiq-orders-drawer" class="hidden fixed inset-0 z-[75] flex justify-end bg-slate-950/60 backdrop-blur-xs">
    <div class="w-full max-w-md bg-white h-full shadow-2xl flex flex-col justify-between border-l border-slate-200">
        <div class="px-5 py-4 border-b border-slate-200 flex items-center justify-between bg-slate-50">
            <div class="flex items-center gap-2.5">
                <span class="w-9 h-9 rounded-full bg-orange-100 text-[#D91B24] flex items-center justify-center text-sm font-bold">📦</span>
                <div>
                    <h3 class="text-sm font-extrabold text-slate-900">Your Orders & Live Tracking</h3>
                    <p class="text-[11px] text-slate-500">Real-time status & 1-click reorder</p>
                </div>
            </div>
            <button type="button" onclick="window.AlabIQ.closeOrdersDrawer()" class="w-8 h-8 rounded-full bg-slate-200/70 hover:bg-slate-300 text-slate-700 flex items-center justify-center text-xs font-bold cursor-pointer">
                ✕
            </button>
        </div>
        <div id="alabiq-orders-drawer-body" class="flex-1 flex flex-col overflow-hidden"></div>
    </div>
</div>

<!-- Book a Ride / Pick & Drop Modal -->
<div id="alabiq-ride-modal" class="hidden fixed inset-0 z-[80] flex items-center justify-center p-3 sm:p-4 bg-slate-950/70 backdrop-blur-xs">
    <div class="w-full max-w-lg rounded-3xl bg-white shadow-2xl overflow-hidden border border-slate-200">
        <div class="px-6 py-5 bg-gradient-to-r from-[#0F131D] via-[#1E1B2E] to-[#D91B24] text-white flex items-center justify-between">
            <div>
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-amber-300">● ALABIQ RIDES & EXPRESS</span>
                <h3 class="text-lg font-black mt-0.5">Book a Ride or Send a Package</h3>
                <p class="text-xs text-slate-200">Upfront fares • Verified drivers • Real-time GPS tracking</p>
            </div>
            <button type="button" onclick="window.AlabIQ.closeRideModal()" class="w-8 h-8 rounded-full bg-white/15 hover:bg-white/25 text-white flex items-center justify-center text-xs cursor-pointer">
                ✕
            </button>
        </div>
        <form onsubmit="window.AlabIQ.submitRideBooking(event)" class="p-6 space-y-4">
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Service Type</label>
                <select id="alabiq-ride-type" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-xs font-bold text-slate-800 focus:outline-none focus:border-[#D91B24]">
                    <option value="Airport Transfer">✈️ Airport Transfer (Upfront Fixed Fare)</option>
                    <option value="City Ride">🚖 City Ride across Riyadh</option>
                    <option value="Send a Package (Pick & Drop)">📦 Send a Package (Instant Pick & Drop)</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Pickup Location</label>
                    <input id="alabiq-ride-pickup" type="text" value="Qurtubah, Riyadh" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs font-medium text-slate-900 focus:outline-none focus:border-[#D91B24]" />
                </div>
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Dropoff Destination</label>
                    <input id="alabiq-ride-dropoff" type="text" value="King Khalid Int'l Airport (RUH)" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 text-xs font-medium text-slate-900 focus:outline-none focus:border-[#D91B24]" />
                </div>
            </div>

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-2">Select Vehicle & Upfront Fare</label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 text-xs">
                    <label class="p-3 rounded-2xl border border-slate-200 hover:border-orange-400 bg-slate-50/70 cursor-pointer flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="text-lg">🛵</span>
                            <input type="radio" name="alabiq_vehicle" value="Moto Courier (SAR 22)" class="accent-[#D91B24]" />
                        </div>
                        <p class="font-bold text-slate-900 mt-2">Moto Express</p>
                        <p class="text-[11px] text-slate-500">Parcels & small bags</p>
                        <p class="font-extrabold text-[#D91B24] mt-1">SAR 22.00</p>
                    </label>
                    <label class="p-3 rounded-2xl border-2 border-[#D91B24] bg-orange-50/40 cursor-pointer flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="text-lg">🚗</span>
                            <input type="radio" name="alabiq_vehicle" value="Comfort Sedan (SAR 55)" checked class="accent-[#D91B24]" />
                        </div>
                        <p class="font-bold text-slate-900 mt-2">Comfort Sedan</p>
                        <p class="text-[11px] text-slate-500">Up to 4 passengers</p>
                        <p class="font-extrabold text-[#D91B24] mt-1">SAR 55.00</p>
                    </label>
                    <label class="p-3 rounded-2xl border border-slate-200 hover:border-orange-400 bg-slate-50/70 cursor-pointer flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="text-lg">🚐</span>
                            <input type="radio" name="alabiq_vehicle" value="Airport Family SUV (SAR 85)" class="accent-[#D91B24]" />
                        </div>
                        <p class="font-bold text-slate-900 mt-2">Airport SUV</p>
                        <p class="text-[11px] text-slate-500">6 seats + luggage</p>
                        <p class="font-extrabold text-[#D91B24] mt-1">SAR 85.00</p>
                    </label>
                </div>
            </div>

            <div class="pt-2 flex items-center justify-end gap-3">
                <button type="button" onclick="window.AlabIQ.closeRideModal()" class="px-4 py-2.5 rounded-full text-xs font-semibold text-slate-600 hover:bg-slate-100 cursor-pointer">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-md cursor-pointer">
                    Confirm & Book Now →
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Delivery Location / Address Picker Modal -->
<div id="alabiq-address-modal" class="hidden fixed inset-0 z-[85] flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-xs">
    <div class="w-full max-w-md rounded-3xl bg-white shadow-2xl overflow-hidden border border-slate-200 p-6 space-y-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-8 h-8 rounded-full bg-orange-100 text-[#D91B24] flex items-center justify-center text-sm">📍</span>
                <h3 class="text-base font-extrabold text-slate-900">Select Delivery Area</h3>
            </div>
            <button type="button" onclick="window.AlabIQ.closeAddressModal()" class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-xs font-bold cursor-pointer">✕</button>
        </div>
        <p class="text-xs text-slate-500">Choose your district in Riyadh for accurate delivery time & fee calculation (SAR 10.00 within 15 km).</p>
        <div class="space-y-2">
            @foreach(['Riyadh, Saudi Arabia', 'Qurtubah, Riyadh 13244', 'Al Olaya District, Riyadh', 'Al Batha Center, Riyadh', 'Al Malaz, Riyadh', 'Sulaimaniyah, Riyadh'] as $loc)
                <button type="button" onclick="window.AlabIQ.setAddress('{{ $loc }}')" class="w-full text-left px-4 py-2.5 rounded-xl border border-slate-200 hover:border-[#F97316] hover:bg-orange-50/50 text-xs font-semibold text-slate-800 flex items-center justify-between transition cursor-pointer">
                    <span>📍 {{ $loc }}</span>
                    <span class="text-[11px] text-[#D91B24] font-bold">Select →</span>
                </button>
            @endforeach
        </div>
        <div class="pt-2 border-t border-slate-100 flex gap-2">
            <input id="alabiq-custom-address" type="text" placeholder="Or enter custom street / building..." class="flex-1 px-3.5 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-[#D91B24]" />
            <button type="button" onclick="window.AlabIQ.setAddress(document.getElementById('alabiq-custom-address').value)" class="px-4 py-2 rounded-xl bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white text-xs font-bold cursor-pointer">Save</button>
        </div>
    </div>
</div>

<!-- Mobile Bottom Sticky Navigation Bar (Visible on Mobile/Tablet) -->
<nav class="md:hidden fixed bottom-0 inset-x-0 z-50 bg-white/95 backdrop-blur-md border-t border-slate-200 px-3 py-2 flex items-center justify-around shadow-lg">
    <a href="{{ url('/') }}" class="flex flex-col items-center gap-0.5 text-[11px] font-bold {{ request()->is('/') ? 'text-[#D91B24]' : 'text-slate-500' }}">
        <span class="text-base">🏠</span>
        <span>Home</span>
    </a>
    <a href="{{ url('/shop') }}" class="flex flex-col items-center gap-0.5 text-[11px] font-bold {{ request()->is('shop*') ? 'text-[#D91B24]' : 'text-slate-500' }}">
        <span class="text-base">🍔</span>
        <span>Shop</span>
    </a>
    <a href="{{ url('/services') }}" class="flex flex-col items-center gap-0.5 text-[11px] font-bold {{ request()->is('services*') ? 'text-[#D91B24]' : 'text-slate-500' }}">
        <span class="text-base">🛵</span>
        <span>Services</span>
    </a>
    <button type="button" onclick="window.AlabIQ.openOrdersDrawer()" class="flex flex-col items-center gap-0.5 text-[11px] font-bold text-slate-500 cursor-pointer">
        <span class="text-base">📋</span>
        <span>Orders</span>
    </button>
    <button type="button" onclick="window.AlabIQ.openCartDrawer()" class="relative flex flex-col items-center gap-0.5 text-[11px] font-bold text-[#D91B24] cursor-pointer">
        <span class="text-base">🛒</span>
        <span>Cart</span>
        <span data-alabiq-cart-count class="absolute -top-1 right-1 min-w-[16px] h-4 px-1 rounded-full bg-[#D91B24] text-white text-[10px] font-extrabold flex items-center justify-center">0</span>
    </button>
</nav>
