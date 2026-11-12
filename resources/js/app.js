const STORES = [
    {
        id: 'black-pinoy',
        name: 'BLACK PINOY',
        subtitle: 'Filipino',
        type: 'restaurants',
        cuisine: 'Filipino',
        badge: 'POPULAR',
        badgeColor: 'amber',
        rating: '4.9',
        reviews: '1.2k+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '15–25 min',
        accent: '#1E293B',
        logoType: 'black-pinoy',
        banner: 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=1000&q=80',
        description: 'Authentic Filipino grill, silog meals, sisig, and all-day comfort favorites made fresh in Riyadh.',
        items: [
            {
                id: 'bp-1',
                name: 'Sizzling Pork/Chicken Sisig Platter',
                category: 'Bestsellers',
                price: 38,
                popular: true,
                desc: 'Crispy chopped chicken & calamansi-chili seasoning on a hot cast plate with egg and garlic rice.',
                image: 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'bp-2',
                name: 'Chicken Inasal BBQ Leg Quarter',
                category: 'Bestsellers',
                price: 32,
                popular: true,
                desc: 'Char-grilled marinated chicken leg quarter basted with annatto oil, served with java rice & atchara.',
                image: 'https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'bp-3',
                name: 'Classic Beef Tapsilog',
                category: 'All-Day Silog',
                price: 34,
                popular: false,
                desc: 'Sweet-savory marinated beef tapa with sinangag (garlic fried rice) and two sunny-side eggs.',
                image: 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'bp-4',
                name: 'Pancit Bihon & Canton Mix Bilao',
                category: 'Noodles & platters',
                price: 45,
                popular: true,
                desc: 'Stir-fried rice and egg noodles loaded with shrimp, chicken strips, and crisp vegetables.',
                image: 'https://images.unsplash.com/photo-1585032226651-759b368d7246?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'bp-5',
                name: 'Halo-Halo Supreme Overload',
                category: 'Desserts & Drinks',
                price: 24,
                popular: true,
                desc: 'Shaved ice layered with ube halaya, leche flan, sweet beans, nata de coco, and ube ice cream.',
                image: 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'chowking',
        name: 'CHOWKING',
        subtitle: 'Chinese',
        type: 'restaurants',
        cuisine: 'Chinese',
        badge: 'NEW',
        badgeColor: 'emerald',
        rating: '4.8',
        reviews: '980+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '15–20 min',
        accent: '#DC2626',
        logoType: 'chowking',
        banner: 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=1000&q=80',
        description: 'Chinese-Filipino wok classics: Chao Fan fried rice, Lauriat boxes, dim sum, and crispy chicken.',
        items: [
            {
                id: 'ck-1',
                name: 'Chinese-Style Fried Chicken Lauriat',
                category: 'Lauriat Boxes',
                price: 42,
                popular: true,
                desc: 'Crispy chicken, pancit canton, Fried Chao Fan rice, steamed siomai, buchi, and iced tea.',
                image: 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ck-2',
                name: 'Spicy Beef Chao Fan with Siomai',
                category: 'Chao Fan',
                price: 29,
                popular: true,
                desc: 'Wok-seared beef fried rice topped with 4pcs steamed chicken-shrimp siomai and chili oil.',
                image: 'https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ck-3',
                name: 'Sweet & Sour Fish Fillet Bowl',
                category: 'Rice Bowls',
                price: 33,
                popular: false,
                desc: 'Crispy battered fish fillets tossed in tangy sweet & sour glaze with bell peppers and pineapple.',
                image: 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ck-4',
                name: 'Beef Wonton Mami Noodle Soup',
                category: 'Noodle Soup',
                price: 31,
                popular: true,
                desc: 'Rich slow-simmered beef broth with egg noodles, tender beef chunks, and plump wonton dumplings.',
                image: 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'chuchay-isabela',
        name: 'CHUCHAY ISABELA SPECIAL PRODUCTS',
        subtitle: 'Filipino',
        type: 'restaurants',
        cuisine: 'Filipino',
        badge: 'NEW',
        badgeColor: 'emerald',
        rating: '4.9',
        reviews: '640+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '20–30 min',
        accent: '#D97706',
        logoType: 'chuchay',
        banner: 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1000&q=80',
        description: 'Authentic Isabela delicacies, crispy bagnet, pancit cabagan, kakanin, and regional specialties.',
        items: [
            {
                id: 'ci-1',
                name: 'Special Pancit Cabagan Overload',
                category: 'Regional Classics',
                price: 39,
                popular: true,
                desc: 'Signature Isabela miki noodles in rich savory sauce topped with crispy lechon kawali and quail eggs.',
                image: 'https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ci-2',
                name: 'Crispy Ilokano Bagnet Kare-Kare',
                category: 'Regional Classics',
                price: 48,
                popular: true,
                desc: 'Twice-cooked crispy belly over roasted peanut kare-kare sauce with eggplant and string beans.',
                image: 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ci-3',
                name: 'Isabela Moriecos & Kakanin Box',
                category: 'Delicacies',
                price: 35,
                popular: true,
                desc: 'Assorted glutinous rice delicacies stuffed with sweet caramelized coconut and leche flan.',
                image: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'happy-ending',
        name: 'HAPPY ENDING',
        subtitle: 'Filipino • Street Food',
        type: 'restaurants',
        cuisine: 'Filipino',
        badge: 'POPULAR',
        badgeColor: 'amber',
        rating: '4.9',
        reviews: '850+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '15–25 min',
        accent: '#EA580C',
        logoType: 'happy-ending',
        banner: 'https://images.unsplash.com/photo-1561758033-d89a9ad46330?auto=format&fit=crop&w=1000&q=80',
        description: 'Pinoy street food fiesta! Kwek-kwek, fishballs, grilled skewers, overload burgers, and milk teas.',
        items: [
            {
                id: 'he-1',
                name: 'Street Food Fiesta Platter (Good for 3)',
                category: 'Street Platters',
                price: 44,
                popular: true,
                desc: 'Kwek-kwek, kikiam, squid balls, fishballs, and crispy calamares with sweet, spicy & vinegar dips.',
                image: 'https://images.unsplash.com/photo-1562967914-608f82629710?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'he-2',
                name: 'Pinoy BBQ Skewers Bundle (6 Sticks)',
                category: 'Grilled Skewers',
                price: 36,
                popular: true,
                desc: 'Sweet-savory char-grilled marinated skewers with spiced vinegar dip and java rice.',
                image: 'https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'he-3',
                name: 'Double Smash Cheese Burger & Fries',
                category: 'Burgers & Snacks',
                price: 32,
                popular: false,
                desc: 'Double seared beef patties, melted cheddar, caramelized onions, and house street sauce.',
                image: 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'jollibee-riyadh',
        name: 'JOLLIBEE',
        subtitle: 'Filipino • Fast Food',
        type: 'restaurants',
        cuisine: 'Filipino',
        badge: 'POPULAR',
        badgeColor: 'amber',
        rating: '4.9',
        reviews: '2.4k+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '15–20 min',
        accent: '#E11D2E',
        logoType: 'jollibee',
        banner: 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?auto=format&fit=crop&w=1000&q=80',
        description: 'Crispylicious, juicylicious Chickenjoy, Jolly Spaghetti, Yumburgers, and Peach Mango Pie.',
        items: [
            {
                id: 'jb-1',
                name: '2-Pc Chickenjoy w/ Jolly Spaghetti',
                category: 'Chickenjoy',
                price: 39,
                popular: true,
                desc: '2 pieces crispy Chickenjoy with signature gravy, sweet-style Jolly Spaghetti, and regular drink.',
                image: 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'jb-2',
                name: '6-Pc Chickenjoy Family Bucket',
                category: 'Family Buckets',
                price: 78,
                popular: true,
                desc: '6 pieces crispy Chickenjoy (original or spicy) served with 3 tubs of signature gravy and rice.',
                image: 'https://images.unsplash.com/photo-1562967914-608f82629710?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'jb-3',
                name: 'Peach Mango Pie (3 Pies To-Go)',
                category: 'Desserts',
                price: 21,
                popular: true,
                desc: 'Golden flaky crust filled with sweet Philippine mango and peach chunks.',
                image: 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'sakura-tokyo',
        name: 'SAKURA RAMEN & SUSHI',
        subtitle: 'Japanese',
        type: 'restaurants',
        cuisine: 'Japanese',
        badge: 'DEAL',
        badgeColor: 'amber',
        rating: '4.8',
        reviews: '510+',
        hours: 'Open 11 AM – 2 AM',
        deliveryFee: 10,
        minOrder: 30,
        eta: '20–30 min',
        accent: '#BE123C',
        logoType: 'japanese',
        banner: 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=1000&q=80',
        description: 'Hand-rolled maki platters, rich tonkotsu-style chicken ramen, crispy katsu curry, and gyoza.',
        items: [
            {
                id: 'sk-1',
                name: 'Dragon & Crispy Salmon Roll Platter (16 pcs)',
                category: 'Sushi Rolls',
                price: 58,
                popular: true,
                desc: 'Tempura shrimp dragon roll and spicy salmon crunch roll topped with unagi glaze and tobiko.',
                image: 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'sk-2',
                name: 'Spicy Miso Chicken Ramen Bowl',
                category: 'Ramen',
                price: 42,
                popular: true,
                desc: 'Rich 12-hour broth, fresh ramen noodles, grilled chicken chashu, ajitama egg, and nori.',
                image: 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'al-wafa-hypermarket',
        name: 'AL WAFA HYPERMARKET',
        subtitle: 'Supermarket',
        type: 'groceries',
        cuisine: 'Groceries',
        badge: 'POPULAR',
        badgeColor: 'amber',
        rating: '4.9',
        reviews: '1.8k+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '25–35 min',
        accent: '#16A34A',
        logoType: 'al-wafa',
        banner: 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1000&q=80',
        description: 'Fresh fruits, organic vegetables, dairy, halal meats, bakery, and household essentials delivered fast.',
        items: [
            {
                id: 'aw-1',
                name: 'Fresh Farm Produce Basket (5 kg Mix)',
                category: 'Fruits & Veg',
                price: 49,
                popular: true,
                desc: 'Bananas, apples, tomatoes, cucumbers, potatoes, onions, and leafy greens picked fresh daily.',
                image: 'https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'aw-2',
                name: 'Almarai Fresh Milk & Dairy Bundle',
                category: 'Dairy & Eggs',
                price: 36,
                popular: true,
                desc: '2L Fresh Full Cream Milk, Greek Yogurt, Labneh, and 30 Large Farm Eggs tray.',
                image: 'https://images.unsplash.com/photo-1550583724-b2692b85b150?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'aw-3',
                name: 'Jasmine Fragrant White Rice (5 kg)',
                category: 'Pantry Staples',
                price: 38,
                popular: true,
                desc: 'Premium long-grain AAA fragrant jasmine rice, soft texture and aromatic.',
                image: 'https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'al-inma-market',
        name: 'AL INMA MARKET SPECIALTIES',
        subtitle: 'Asian & Specialty Store',
        type: 'shops',
        cuisine: 'Specialty Shop',
        badge: 'FEATURED',
        badgeColor: 'amber',
        rating: '4.8',
        reviews: '540+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '20–30 min',
        accent: '#92400E',
        logoType: 'al-inma',
        banner: 'https://images.unsplash.com/photo-1578916171728-46686eac8d58?auto=format&fit=crop&w=1000&q=80',
        description: 'Imported Asian condiments, noodles, snacks, frozen goods, and specialty cooking ingredients.',
        items: [
            {
                id: 'ai-1',
                name: 'Asian Pantry Essentials Kit (Sauces & Seasonings)',
                category: 'Condiments',
                price: 45,
                popular: true,
                desc: 'Silver Swan soy sauce, Datu Puti vinegar, UFC banana ketchup, oyster sauce, and mama sita mixes.',
                image: 'https://images.unsplash.com/photo-1584269600464-37b1b58a9fe7?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ai-2',
                name: 'Lucky Me! Pancit Canton & Instant Mami Pack (12 pcs)',
                category: 'Noodles & Snacks',
                price: 28,
                popular: true,
                desc: 'Assorted Calamansi, Chilimansi, and Sweet & Spicy Pancit Canton multipack.',
                image: 'https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?auto=format&fit=crop&w=600&q=80'
            }
        ]
    },
    {
        id: 'pinas-supermarket',
        name: 'PINAS SUPERMARKET',
        subtitle: 'Filipino & Asian Supermarket',
        type: 'shops',
        cuisine: 'Supermarket',
        badge: 'FEATURED',
        badgeColor: 'rose',
        rating: '4.9',
        reviews: '920+',
        hours: 'Open 24/7',
        deliveryFee: 10,
        minOrder: 30,
        eta: '20–35 min',
        accent: '#E11D48',
        logoType: 'pinas',
        banner: 'https://images.unsplash.com/photo-1604719312566-8912e9227c6a?auto=format&fit=crop&w=1000&q=80',
        description: 'Your home away from home in Riyadh — authentic Filipino groceries, bakery, snacks, and personal care.',
        items: [
            {
                id: 'ps-1',
                name: 'Freshly Baked Pandesal & Spanish Bread (20 pcs)',
                category: 'Filipino Bakery',
                price: 22,
                popular: true,
                desc: 'Warm pillowy pandesal and sweet buttery Spanish bread baked fresh every morning and evening.',
                image: 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80'
            },
            {
                id: 'ps-2',
                name: 'Pinoy Fiesta Snack Box (Chichiria & Goodies)',
                category: 'Snacks & Sweets',
                price: 52,
                popular: true,
                desc: 'Piattos, Nova, Clover Chips, Boy Bawang, Choc Nut, SkyFlakes, and C2 Green Tea.',
                image: 'https://images.unsplash.com/photo-1621939514649-280e2ee25f60?auto=format&fit=crop&w=600&q=80'
            }
        ]
    }
];

const STORAGE_KEYS = {
    CART: 'alabiq_cart_v1',
    ORDERS: 'alabiq_orders_v1',
    USER: 'alabiq_user_v1',
    ADDRESS: 'alabiq_address_v1',
    FAVORITES: 'alabiq_favorites_v1'
};

class AlabIQApp {
    constructor() {
        this.stores = STORES;
        this.cart = this.loadJSON(STORAGE_KEYS.CART, []);
        this.orders = this.loadJSON(STORAGE_KEYS.ORDERS, [
            {
                id: 'ALQ-8841',
                date: 'Yesterday, 8:40 PM',
                storeId: 'black-pinoy',
                storeName: 'BLACK PINOY',
                status: 'Delivered',
                statusStep: 4,
                total: 80,
                items: [
                    { id: 'bp-1', name: 'Sizzling Pork/Chicken Sisig Platter', price: 38, qty: 1 },
                    { id: 'bp-2', name: 'Chicken Inasal BBQ Leg Quarter', price: 32, qty: 1 }
                ]
            }
        ]);
        this.user = this.loadJSON(STORAGE_KEYS.USER, null);
        this.address = localStorage.getItem(STORAGE_KEYS.ADDRESS) || 'Riyadh, Saudi Arabia';
        this.favorites = this.loadJSON(STORAGE_KEYS.FAVORITES, ['black-pinoy', 'jollibee-riyadh']);
        this.promoDiscount = 0;
        this.promoCode = '';
        this.activeStore = null;
        this.activeStoreCategory = 'All';
    }

    loadJSON(key, fallback) {
        try {
            const raw = localStorage.getItem(key);
            return raw ? JSON.parse(raw) : fallback;
        } catch {
            return fallback;
        }
    }

    saveState() {
        localStorage.setItem(STORAGE_KEYS.CART, JSON.stringify(this.cart));
        localStorage.setItem(STORAGE_KEYS.ORDERS, JSON.stringify(this.orders));
        if (this.user) {
            localStorage.setItem(STORAGE_KEYS.USER, JSON.stringify(this.user));
        } else {
            localStorage.removeItem(STORAGE_KEYS.USER);
        }
        localStorage.setItem(STORAGE_KEYS.ADDRESS, this.address);
        localStorage.setItem(STORAGE_KEYS.FAVORITES, JSON.stringify(this.favorites));
        this.renderGlobalUI();
    }

    init() {
        this.renderGlobalUI();
        this.bindEvents();
    }

    showToast(title, message, type = 'success') {
        const container = document.getElementById('alabiq-toast-container');
        if (!container) return;
        const toast = document.createElement('div');
        const bgClass = type === 'success'
            ? 'border-emerald-500/30 bg-slate-900 text-white'
            : 'border-red-500/40 bg-slate-900 text-white';
        toast.className = `flex items-start gap-3 px-4 py-3.5 rounded-2xl shadow-2xl border ${bgClass} transform transition-all duration-300 translate-y-2 opacity-0 max-w-sm w-full pointer-events-auto`;
        toast.innerHTML = `
            <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-[#D91B24] to-[#F97316] flex items-center justify-center shrink-0 mt-0.5 text-white font-bold text-sm">
                ✓
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-white">${title}</p>
                <p class="text-xs text-slate-300 mt-0.5">${message}</p>
            </div>
        `;
        container.appendChild(toast);
        requestAnimationFrame(() => {
            toast.classList.remove('translate-y-2', 'opacity-0');
        });
        setTimeout(() => {
            toast.classList.add('translate-y-2', 'opacity-0');
            setTimeout(() => toast.remove(), 300);
        }, 3200);
    }

    getStore(storeId) {
        return this.stores.find(s => s.id === storeId) || this.stores[0];
    }

    openStoreModal(storeId) {
        const store = this.getStore(storeId);
        this.activeStore = store;
        this.activeStoreCategory = 'All';
        const modal = document.getElementById('alabiq-store-modal');
        if (!modal) return;
        this.renderStoreModalContent();
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    closeStoreModal() {
        const modal = document.getElementById('alabiq-store-modal');
        if (!modal) return;
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    renderStoreModalContent() {
        const store = this.activeStore;
        if (!store) return;
        const container = document.getElementById('alabiq-store-modal-body');
        if (!container) return;

        const categories = ['All', ...new Set(store.items.map(i => i.category))];
        const filteredItems = this.activeStoreCategory === 'All'
            ? store.items
            : store.items.filter(i => i.category === this.activeStoreCategory);

        container.innerHTML = `
            <div class="relative h-48 sm:h-56 w-full overflow-hidden bg-slate-900">
                <img src="${store.banner}" alt="${store.name}" class="w-full h-full object-cover opacity-80" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/50 to-transparent"></div>
                <button type="button" onclick="window.AlabIQ.closeStoreModal()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-black/50 hover:bg-black/80 text-white flex items-center justify-center backdrop-blur-md transition cursor-pointer">
                    ✕
                </button>
                <div class="absolute bottom-4 left-5 right-5 flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <div class="flex items-center gap-2 mb-1.5">
                            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white">${store.badge}</span>
                            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-white/15 text-white backdrop-blur-sm">★ ${store.rating} (${store.reviews})</span>
                            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-emerald-500/20 text-emerald-300 backdrop-blur-sm">● ${store.hours}</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">${store.name}</h2>
                        <p class="text-xs sm:text-sm text-slate-200 mt-0.5 max-w-xl">${store.description}</p>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-semibold text-white bg-white/10 backdrop-blur-md px-3.5 py-2 rounded-xl border border-white/15">
                        <span>🛵 ${store.eta}</span>
                        <span>•</span>
                        <span>SAR ${store.deliveryFee}.00 delivery</span>
                        <span>•</span>
                        <span>Min. SAR ${store.minOrder}</span>
                    </div>
                </div>
            </div>

            <div class="px-5 py-3.5 border-b border-slate-100 bg-slate-50/70 flex items-center gap-2 overflow-x-auto no-scrollbar">
                ${categories.map(cat => `
                    <button type="button"
                        onclick="window.AlabIQ.setStoreCategory('${cat}')"
                        class="px-3.5 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition cursor-pointer ${
                            this.activeStoreCategory === cat
                                ? 'bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white shadow-sm'
                                : 'bg-white text-slate-600 hover:text-slate-900 border border-slate-200'
                        }">
                        ${cat}
                    </button>
                `).join('')}
            </div>

            <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-4 max-h-[55vh] overflow-y-auto">
                ${filteredItems.map(item => {
                    const inCart = this.cart.find(c => c.id === item.id);
                    const qty = inCart ? inCart.qty : 0;
                    return `
                        <div class="flex gap-3.5 p-3.5 rounded-2xl border border-slate-200/80 hover:border-orange-300 bg-white shadow-xs hover:shadow-md transition group">
                            <img src="${item.image}" alt="${item.name}" class="w-24 h-24 rounded-xl object-cover shrink-0 bg-slate-100" />
                            <div class="flex-1 min-w-0 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="text-sm font-bold text-slate-900 leading-snug">${item.name}</h4>
                                        ${item.popular ? '<span class="shrink-0 text-[10px] font-bold uppercase px-2 py-0.5 rounded-md bg-orange-50 text-[#D91B24] border border-orange-200">Popular</span>' : ''}
                                    </div>
                                    <p class="text-xs text-slate-500 mt-1 line-clamp-2">${item.desc}</p>
                                </div>
                                <div class="flex items-center justify-between mt-3 pt-2 border-t border-slate-100">
                                    <span class="text-sm font-extrabold text-slate-900">SAR ${item.price}.00</span>
                                    ${qty > 0 ? `
                                        <div class="inline-flex items-center gap-2 bg-orange-50 border border-orange-200 rounded-full px-2 py-1">
                                            <button type="button" onclick="window.AlabIQ.updateCartQty('${item.id}', -1)" class="w-6 h-6 rounded-full bg-white text-slate-700 hover:bg-slate-100 font-bold text-xs flex items-center justify-center shadow-2xs cursor-pointer">−</button>
                                            <span class="text-xs font-bold text-[#D91B24] min-w-[16px] text-center">${qty}</span>
                                            <button type="button" onclick="window.AlabIQ.updateCartQty('${item.id}', 1)" class="w-6 h-6 rounded-full bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white font-bold text-xs flex items-center justify-center shadow-2xs cursor-pointer">+</button>
                                        </div>
                                    ` : `
                                        <button type="button" onclick="window.AlabIQ.addToCart('${store.id}', '${item.id}')" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-xs cursor-pointer transition">
                                            <span>+ Add</span>
                                        </button>
                                    `}
                                </div>
                            </div>
                        </div>
                    `;
                }).join('')}
            </div>

            <div class="px-5 py-4 bg-slate-50 border-t border-slate-200 flex flex-wrap items-center justify-between gap-3">
                <div class="text-xs text-slate-600">
                    <span class="font-bold text-slate-900">${this.getCartCount()} items</span> in cart • Subtotal: <span class="font-extrabold text-[#D91B24]">SAR ${this.getCartSubtotal().toFixed(2)}</span>
                </div>
                <div class="flex items-center gap-2.5">
                    <button type="button" onclick="window.AlabIQ.closeStoreModal()" class="px-4 py-2 rounded-full text-xs font-semibold text-slate-600 hover:bg-slate-200/70 transition cursor-pointer">
                        Continue Browsing
                    </button>
                    <button type="button" onclick="window.AlabIQ.closeStoreModal(); window.AlabIQ.openCartDrawer();" class="px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-md cursor-pointer transition">
                        View Cart & Checkout →
                    </button>
                </div>
            </div>
        `;
    }

    setStoreCategory(cat) {
        this.activeStoreCategory = cat;
        this.renderStoreModalContent();
    }

    addToCart(storeId, itemId) {
        const store = this.getStore(storeId);
        const item = store.items.find(i => i.id === itemId);
        if (!item) return;

        const existing = this.cart.find(c => c.id === itemId);
        if (existing) {
            existing.qty += 1;
        } else {
            this.cart.push({
                id: item.id,
                storeId: store.id,
                storeName: store.name,
                name: item.name,
                price: item.price,
                image: item.image,
                qty: 1
            });
        }
        this.saveState();
        if (this.activeStore) this.renderStoreModalContent();
        this.showToast('Added to Cart', `${item.name} (${store.name}) added.`);
    }

    updateCartQty(itemId, delta) {
        const idx = this.cart.findIndex(c => c.id === itemId);
        if (idx === -1) return;
        this.cart[idx].qty += delta;
        if (this.cart[idx].qty <= 0) {
            this.cart.splice(idx, 1);
        }
        this.saveState();
        if (this.activeStore) this.renderStoreModalContent();
    }

    clearCart() {
        this.cart = [];
        this.promoDiscount = 0;
        this.promoCode = '';
        this.saveState();
    }

    getCartCount() {
        return this.cart.reduce((sum, item) => sum + item.qty, 0);
    }

    getCartSubtotal() {
        return this.cart.reduce((sum, item) => sum + item.price * item.qty, 0);
    }

    applyPromo(codeInput) {
        const code = (codeInput || '').trim().toUpperCase();
        if (code === 'ALABIQ20') {
            this.promoCode = 'ALABIQ20';
            this.promoDiscount = Math.round(this.getCartSubtotal() * 0.2);
            this.showToast('Promo Applied!', 'ALABIQ20 gave you 20% off your order.');
        } else if (code === 'FREEDEL') {
            this.promoCode = 'FREEDEL';
            this.promoDiscount = 10;
            this.showToast('Free Delivery Applied!', 'SAR 10.00 delivery fee waived.');
        } else {
            this.showToast('Invalid Promo Code', 'Try ALABIQ20 (20% off) or FREEDEL.', 'error');
            return;
        }
        this.renderCartDrawer();
    }

    openCartDrawer() {
        const drawer = document.getElementById('alabiq-cart-drawer');
        if (!drawer) return;
        this.renderCartDrawer();
        drawer.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    closeCartDrawer() {
        const drawer = document.getElementById('alabiq-cart-drawer');
        if (!drawer) return;
        drawer.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    renderCartDrawer() {
        const body = document.getElementById('alabiq-cart-drawer-body');
        if (!body) return;

        if (this.cart.length === 0) {
            body.innerHTML = `
                <div class="flex flex-col items-center justify-center text-center py-16 px-6">
                    <div class="w-20 h-20 rounded-full bg-orange-50 text-[#D91B24] flex items-center justify-center text-3xl mb-4 shadow-inner">
                        🛒
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Your AlabIQ cart is empty</h3>
                    <p class="text-xs text-slate-500 mt-1 max-w-xs">Explore partner restaurants, Filipino favorites, and supermarkets to add delicious items.</p>
                    <button type="button" onclick="window.AlabIQ.closeCartDrawer(); window.AlabIQ.openStoreModal('black-pinoy');" class="mt-6 px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] shadow-md cursor-pointer">
                        Browse Popular Menu →
                    </button>
                </div>
            `;
            return;
        }

        const subtotal = this.getCartSubtotal();
        const deliveryFee = 10;
        const discount = this.promoCode === 'ALABIQ20' ? Math.round(subtotal * 0.2) : (this.promoCode === 'FREEDEL' ? 10 : 0);
        const total = Math.max(0, subtotal + deliveryFee - discount);

        body.innerHTML = `
            <div class="p-5 space-y-4 flex-1 overflow-y-auto">
                <div class="p-3.5 rounded-2xl bg-orange-50/70 border border-orange-200/70 flex items-center justify-between gap-2">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <span class="text-lg">📍</span>
                        <div class="min-w-0">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-[#D91B24]">Delivering To</p>
                            <p class="text-xs font-semibold text-slate-800 truncate">${this.address}</p>
                        </div>
                    </div>
                    <button type="button" onclick="window.AlabIQ.openAddressModal()" class="text-xs font-bold text-[#D91B24] hover:underline shrink-0 cursor-pointer">Change</button>
                </div>

                <div class="space-y-3">
                    ${this.cart.map(item => `
                        <div class="flex items-center gap-3 p-3 rounded-2xl border border-slate-200 bg-white shadow-2xs">
                            <img src="${item.image}" alt="${item.name}" class="w-16 h-16 rounded-xl object-cover shrink-0 bg-slate-100" />
                            <div class="flex-1 min-w-0">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-[#F97316]">${item.storeName}</p>
                                <h4 class="text-xs font-bold text-slate-900 truncate">${item.name}</h4>
                                <p class="text-xs font-extrabold text-slate-800 mt-1">SAR ${(item.price * item.qty).toFixed(2)}</p>
                            </div>
                            <div class="flex items-center gap-1.5 bg-slate-100 rounded-full p-1">
                                <button type="button" onclick="window.AlabIQ.updateCartQty('${item.id}', -1); window.AlabIQ.renderCartDrawer();" class="w-6 h-6 rounded-full bg-white text-slate-700 font-bold text-xs flex items-center justify-center shadow-2xs cursor-pointer">−</button>
                                <span class="text-xs font-bold text-slate-900 min-w-[18px] text-center">${item.qty}</span>
                                <button type="button" onclick="window.AlabIQ.updateCartQty('${item.id}', 1); window.AlabIQ.renderCartDrawer();" class="w-6 h-6 rounded-full bg-gradient-to-r from-[#D91B24] to-[#F97316] text-white font-bold text-xs flex items-center justify-center shadow-2xs cursor-pointer">+</button>
                            </div>
                        </div>
                    `).join('')}
                </div>

                <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-2">Promo / Voucher Code</label>
                    <div class="flex gap-2">
                        <input id="alabiq-promo-input" type="text" value="${this.promoCode}" placeholder="Try ALABIQ20 or FREEDEL" class="flex-1 px-3.5 py-2 rounded-xl border border-slate-200 bg-white text-xs font-medium focus:outline-none focus:border-[#F97316]" />
                        <button type="button" onclick="window.AlabIQ.applyPromo(document.getElementById('alabiq-promo-input').value)" class="px-4 py-2 rounded-xl bg-slate-900 text-white text-xs font-bold hover:bg-slate-800 cursor-pointer transition">Apply</button>
                    </div>
                </div>

                <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-2">
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Payment Method</p>
                    <div class="grid grid-cols-3 gap-2 text-xs">
                        <label class="flex items-center justify-center gap-1.5 p-2.5 rounded-xl border border-orange-400 bg-orange-50/60 font-bold text-slate-900 cursor-pointer">
                            <input type="radio" name="alabiq_pay" checked class="accent-[#D91B24]" /> Cash
                        </label>
                        <label class="flex items-center justify-center gap-1.5 p-2.5 rounded-xl border border-slate-200 bg-white font-semibold text-slate-700 cursor-pointer">
                            <input type="radio" name="alabiq_pay" class="accent-[#D91B24]" /> Card/Mada
                        </label>
                        <label class="flex items-center justify-center gap-1.5 p-2.5 rounded-xl border border-slate-200 bg-white font-semibold text-slate-700 cursor-pointer">
                            <input type="radio" name="alabiq_pay" class="accent-[#D91B24]" /> Apple Pay
                        </label>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-white border border-slate-200 space-y-2 text-xs">
                    <div class="flex justify-between text-slate-600">
                        <span>Subtotal (${this.getCartCount()} items)</span>
                        <span class="font-semibold text-slate-900">SAR ${subtotal.toFixed(2)}</span>
                    </div>
                    <div class="flex justify-between text-slate-600">
                        <span>Delivery Fee (within 15 km)</span>
                        <span class="font-semibold text-slate-900">SAR ${deliveryFee.toFixed(2)}</span>
                    </div>
                    ${discount > 0 ? `
                        <div class="flex justify-between text-emerald-600 font-semibold">
                            <span>Promo Discount (${this.promoCode})</span>
                            <span>− SAR ${discount.toFixed(2)}</span>
                        </div>
                    ` : ''}
                    <div class="pt-2 border-t border-slate-200 flex justify-between text-sm font-extrabold text-slate-900">
                        <span>Total</span>
                        <span class="text-[#D91B24]">SAR ${total.toFixed(2)}</span>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white border-t border-slate-200">
                <button type="button" onclick="window.AlabIQ.placeOrder()" class="w-full py-3.5 px-6 rounded-2xl font-bold text-sm text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 shadow-lg shadow-orange-500/25 flex items-center justify-center gap-2 cursor-pointer transition">
                    <span>Place Order Now • SAR ${total.toFixed(2)}</span>
                    <span>→</span>
                </button>
            </div>
        `;
    }

    placeOrder() {
        if (this.cart.length === 0) return;
        const subtotal = this.getCartSubtotal();
        const deliveryFee = 10;
        const discount = this.promoCode === 'ALABIQ20' ? Math.round(subtotal * 0.2) : (this.promoCode === 'FREEDEL' ? 10 : 0);
        const total = Math.max(0, subtotal + deliveryFee - discount);
        const firstStore = this.cart[0];

        const newOrder = {
            id: 'ALQ-' + Math.floor(1000 + Math.random() * 9000),
            date: 'Just now',
            storeId: firstStore.storeId,
            storeName: firstStore.storeName,
            status: 'Rider on the Way',
            statusStep: 2,
            total: total,
            address: this.address,
            items: this.cart.map(c => ({ id: c.id, name: c.name, price: c.price, qty: c.qty }))
        };

        this.orders.unshift(newOrder);
        this.clearCart();
        this.closeCartDrawer();
        this.openOrdersDrawer();
        this.showToast('Order Confirmed! 🛵', `Order ${newOrder.id} is being prepared and assigned to an AlabIQ rider.`);
    }

    openOrdersDrawer() {
        const drawer = document.getElementById('alabiq-orders-drawer');
        if (!drawer) return;
        this.renderOrdersDrawer();
        drawer.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    closeOrdersDrawer() {
        const drawer = document.getElementById('alabiq-orders-drawer');
        if (!drawer) return;
        drawer.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    advanceOrderStep(orderId) {
        const order = this.orders.find(o => o.id === orderId);
        if (!order) return;
        const labels = ['Order Confirmed', 'Preparing Order', 'Rider on the Way', 'Arriving at Door', 'Delivered'];
        order.statusStep = (order.statusStep + 1) % labels.length;
        order.status = labels[order.statusStep];
        this.saveState();
        this.renderOrdersDrawer();
        this.showToast(`Order ${order.id} Update`, `Status updated to: ${order.status}`);
    }

    reorder(orderId) {
        const order = this.orders.find(o => o.id === orderId);
        if (!order) return;
        const store = this.getStore(order.storeId);
        order.items.forEach(item => {
            const fullItem = store.items.find(i => i.id === item.id) || store.items[0];
            const existing = this.cart.find(c => c.id === fullItem.id);
            if (existing) {
                existing.qty += item.qty;
            } else {
                this.cart.push({
                    id: fullItem.id,
                    storeId: store.id,
                    storeName: store.name,
                    name: fullItem.name,
                    price: fullItem.price,
                    image: fullItem.image,
                    qty: item.qty
                });
            }
        });
        this.saveState();
        this.closeOrdersDrawer();
        this.openCartDrawer();
        this.showToast('Items Added to Cart', `Reordered items from ${order.storeName}.`);
    }

    renderOrdersDrawer() {
        const body = document.getElementById('alabiq-orders-drawer-body');
        if (!body) return;

        const steps = ['Confirmed', 'Preparing', 'Rider on Way', 'Delivered'];

        body.innerHTML = `
            <div class="p-5 space-y-4 overflow-y-auto flex-1">
                ${this.orders.map((order, idx) => `
                    <div class="p-4 rounded-2xl border ${idx === 0 && order.status !== 'Delivered' ? 'border-orange-300 bg-gradient-to-br from-orange-50/70 to-white shadow-sm' : 'border-slate-200 bg-white'} space-y-3">
                        <div class="flex items-center justify-between gap-2">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-extrabold text-slate-900">${order.id}</span>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase ${
                                        order.status === 'Delivered'
                                            ? 'bg-emerald-100 text-emerald-700'
                                            : 'bg-orange-100 text-[#D91B24]'
                                    }">${order.status}</span>
                                </div>
                                <p class="text-xs font-bold text-slate-800 mt-0.5">${order.storeName}</p>
                                <p class="text-[11px] text-slate-400">${order.date}</p>
                            </div>
                            <span class="text-sm font-extrabold text-[#D91B24]">SAR ${Number(order.total).toFixed(2)}</span>
                        </div>

                        ${order.status !== 'Delivered' ? `
                            <div class="pt-2">
                                <div class="flex items-center justify-between text-[10px] font-bold text-slate-500 mb-1.5">
                                    ${steps.map((s, sIdx) => `
                                        <span class="${sIdx <= order.statusStep ? 'text-[#D91B24]' : ''}">${s}</span>
                                    `).join('')}
                                </div>
                                <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden">
                                    <div class="h-full rounded-full bg-gradient-to-r from-[#D91B24] to-[#F97316] transition-all duration-500" style="width: ${Math.min(100, (order.statusStep + 1) * 25)}%"></div>
                                </div>
                                <div class="mt-3 p-2.5 rounded-xl bg-white border border-slate-200/80 flex items-center justify-between gap-2 text-xs">
                                    <div class="flex items-center gap-2">
                                        <span class="w-8 h-8 rounded-full bg-red-50 text-[#D91B24] flex items-center justify-center font-bold">🛵</span>
                                        <div>
                                            <p class="font-bold text-slate-800">Capt. Khalid • AlabIQ Red Rider</p>
                                            <p class="text-[11px] text-slate-500">Live GPS Tracking • ETA 14 mins</p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="window.AlabIQ.advanceOrderStep('${order.id}')" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-slate-200 text-[11px] font-bold text-slate-700 cursor-pointer">
                                        Next Step ↻
                                    </button>
                                </div>
                            </div>
                        ` : ''}

                        <div class="text-xs text-slate-600 space-y-1 pt-2 border-t border-slate-100">
                            ${order.items.map(i => `<div class="flex justify-between"><span>${i.qty}x ${i.name}</span><span class="font-medium">SAR ${(i.price * i.qty).toFixed(2)}</span></div>`).join('')}
                        </div>

                        <div class="pt-2 flex justify-end">
                            <button type="button" onclick="window.AlabIQ.reorder('${order.id}')" class="px-3.5 py-1.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] hover:opacity-95 cursor-pointer transition">
                                ↻ Reorder Meals
                            </button>
                        </div>
                    </div>
                `).join('')}
            </div>
        `;
    }

    openRideModal(serviceType = 'Airport Transfer') {
        const modal = document.getElementById('alabiq-ride-modal');
        if (!modal) return;
        const typeSelect = document.getElementById('alabiq-ride-type');
        if (typeSelect) typeSelect.value = serviceType;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    closeRideModal() {
        const modal = document.getElementById('alabiq-ride-modal');
        if (!modal) return;
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    submitRideBooking(event) {
        if (event) event.preventDefault();
        const pickup = document.getElementById('alabiq-ride-pickup')?.value || 'Qurtubah, Riyadh';
        const dropoff = document.getElementById('alabiq-ride-dropoff')?.value || 'King Khalid International Airport (RUH)';
        const vehicle = document.querySelector('input[name="alabiq_vehicle"]:checked')?.value || 'Airport Sedan (SAR 65)';

        this.orders.unshift({
            id: 'RIDE-' + Math.floor(1000 + Math.random() * 9000),
            date: 'Scheduled Now',
            storeId: 'black-pinoy',
            storeName: `AlabIQ Ride • ${vehicle}`,
            status: 'Driver En Route',
            statusStep: 2,
            total: vehicle.includes('85') ? 85 : (vehicle.includes('22') ? 22 : 55),
            items: [
                { id: 'bp-1', name: `${pickup} → ${dropoff}`, price: vehicle.includes('85') ? 85 : (vehicle.includes('22') ? 22 : 55), qty: 1 }
            ]
        });
        this.saveState();
        this.closeRideModal();
        this.openOrdersDrawer();
        this.showToast('Ride & Transfer Booked! 🚖', `Driver assigned for ${pickup} → ${dropoff}.`);
    }

    openAddressModal() {
        const modal = document.getElementById('alabiq-address-modal');
        if (!modal) return;
        modal.classList.remove('hidden');
    }

    closeAddressModal() {
        const modal = document.getElementById('alabiq-address-modal');
        if (!modal) return;
        modal.classList.add('hidden');
    }

    setAddress(newAddress) {
        if (!newAddress || !newAddress.trim()) return;
        this.address = newAddress.trim();
        this.saveState();
        this.closeAddressModal();
        this.showToast('Delivery Location Updated 📍', `Delivering to ${this.address}`);
    }

    toggleFavorite(storeId, btnEl) {
        const idx = this.favorites.indexOf(storeId);
        const store = this.getStore(storeId);
        if (idx >= 0) {
            this.favorites.splice(idx, 1);
            this.showToast('Removed from Favorites', `${store.name} removed from your saved list.`);
        } else {
            this.favorites.push(storeId);
            this.showToast('Saved to Favorites ❤️', `${store.name} added to your favorites.`);
        }
        this.saveState();
        if (btnEl) {
            this.renderGlobalUI();
        }
    }

    loginUser(email, name = '') {
        const displayName = name || (email ? email.split('@')[0] : 'AlabIQ Member');
        this.user = {
            name: displayName.charAt(0).toUpperCase() + displayName.slice(1),
            email: email || 'member@alabiq.com'
        };
        this.saveState();
        this.showToast(`Welcome back, ${this.user.name}!`, 'You are now signed in to your AlabIQ account.');
    }

    logoutUser() {
        this.user = null;
        this.saveState();
        this.showToast('Signed Out', 'You have been logged out safely.');
    }

    renderGlobalUI() {
        // Cart counters
        const count = this.getCartCount();
        document.querySelectorAll('[data-alabiq-cart-count]').forEach(el => {
            el.textContent = count;
            if (count > 0) {
                el.classList.remove('hidden');
            }
        });

        // Address labels
        document.querySelectorAll('[data-alabiq-address]').forEach(el => {
            el.textContent = this.address;
        });

        // Favorite buttons
        document.querySelectorAll('[data-alabiq-fav]').forEach(btn => {
            const storeId = btn.getAttribute('data-alabiq-fav');
            const isFav = this.favorites.includes(storeId);
            btn.innerHTML = isFav
                ? '<svg class="w-4 h-4 text-[#D91B24] fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>'
                : '<svg class="w-4 h-4 text-slate-400 hover:text-[#D91B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>';
        });

        // Auth state in headers
        document.querySelectorAll('[data-alabiq-auth-guest]').forEach(el => {
            el.classList.toggle('hidden', !!this.user);
        });
        document.querySelectorAll('[data-alabiq-auth-user]').forEach(el => {
            el.classList.toggle('hidden', !this.user);
        });
        document.querySelectorAll('[data-alabiq-user-name]').forEach(el => {
            if (this.user) el.textContent = this.user.name;
        });

        // Recent orders widget on Shop page
        const recentBox = document.getElementById('alabiq-recent-orders-widget');
        if (recentBox) {
            if (this.orders.length > 0 && this.user) {
                const latest = this.orders[0];
                recentBox.innerHTML = `
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-900">${latest.storeName}</p>
                            <p class="text-[11px] text-slate-500">${latest.items.length} item(s) • SAR ${Number(latest.total).toFixed(2)}</p>
                        </div>
                        <button type="button" onclick="window.AlabIQ.reorder('${latest.id}')" class="px-3 py-1.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-[#D91B24] to-[#F97316] cursor-pointer">
                            Reorder
                        </button>
                    </div>
                `;
            }
        }
    }

    bindEvents() {
        // Search filter on Shop & Services pages
        document.querySelectorAll('[data-alabiq-search]').forEach(input => {
            input.addEventListener('input', (e) => {
                const q = e.target.value.toLowerCase().trim();
                this.filterStoreCards(q, null);
            });
        });
    }

    filterStoreCards(query = '', category = null) {
        const cards = document.querySelectorAll('[data-store-card]');
        let visibleCount = 0;
        cards.forEach(card => {
            const name = (card.getAttribute('data-store-name') || '').toLowerCase();
            const cuisine = (card.getAttribute('data-store-cuisine') || '').toLowerCase();
            const type = (card.getAttribute('data-store-type') || '').toLowerCase();

            const matchesQuery = !query || name.includes(query) || cuisine.includes(query) || type.includes(query);
            const matchesCat = !category || category === 'all' || cuisine === category.toLowerCase() || type === category.toLowerCase();

            if (matchesQuery && matchesCat) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        const emptyState = document.getElementById('alabiq-empty-filter-state');
        if (emptyState) {
            emptyState.classList.toggle('hidden', visibleCount > 0);
        }

        // Update active category pill styling if category passed
        if (category !== null) {
            document.querySelectorAll('[data-cat-pill]').forEach(pill => {
                const pillCat = pill.getAttribute('data-cat-pill');
                const isActive = pillCat.toLowerCase() === category.toLowerCase();
                pill.classList.toggle('ring-2', isActive);
                pill.classList.toggle('ring-[#D91B24]', isActive);
                pill.classList.toggle('bg-orange-50/70', isActive);
            });
        }
    }
}

window.AlabIQ = new AlabIQApp();
document.addEventListener('DOMContentLoaded', () => {
    window.AlabIQ.init();
});
