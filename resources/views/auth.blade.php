@php
    $initialMode = $mode ?? 'login';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $initialMode === 'register' ? 'Sign Up' : 'Sign In' }} — AlabIQ | We DeliveRED</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-900 antialiased min-h-screen flex flex-col lg:flex-row selection:bg-[#D91B24] selection:text-white">

    <!-- LEFT BRAND PANEL (Exact match to media_1794388118023_9911bf65.png) -->
    <div class="lg:w-[46%] xl:w-[44%] bg-gradient-to-br from-[#FFF5ED] via-[#FFEAD9] to-[#FFD8C2] bg-grid-warm p-8 sm:p-12 lg:p-14 flex flex-col justify-between relative overflow-hidden border-b lg:border-b-0 lg:border-r border-orange-200/60">
        <!-- Soft radial glow -->
        <div class="pointer-events-none absolute -bottom-24 -right-24 w-96 h-96 rounded-full bg-gradient-to-br from-[#F97316]/25 to-[#D91B24]/25 blur-3xl"></div>

        <!-- Top Brand Logo -->
        <div class="relative z-10">
            @include('partials.logo', ['theme' => 'light', 'size' => 'md'])
        </div>

        <!-- Center Marketing Copy & 3 Feature Rows -->
        <div class="my-10 lg:my-auto space-y-6 relative z-10 max-w-md">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/90 border border-orange-200/80 shadow-2xs text-[11px] font-extrabold uppercase tracking-wider text-[#F97316]">
                <span class="w-2 h-2 rounded-full bg-[#F97316]"></span>
                <span>ALL-IN-ONE PLATFORM</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-black tracking-tight text-slate-950 leading-[1.12]">
                Welcome back to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#D91B24]">AlabIQ</span><br />
                <span class="text-[#D91B24] text-2xl sm:text-3xl">We DeliveRED</span>
            </h1>

            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Sign in to book rides, track deliveries, and manage your account — all in one place.
            </p>

            <!-- 3 Feature Rows -->
            <div class="space-y-3.5 pt-2">
                <div class="flex items-center gap-3.5">
                    <span class="w-10 h-10 rounded-xl bg-white shadow-xs border border-orange-100 flex items-center justify-center text-[#F97316] text-base shrink-0">
                        🍴
                    </span>
                    <span class="text-xs sm:text-sm font-bold text-slate-900">Order food from 500+ restaurants</span>
                </div>

                <div class="flex items-center gap-3.5">
                    <span class="w-10 h-10 rounded-xl bg-white shadow-xs border border-orange-100 flex items-center justify-center text-[#F97316] text-base shrink-0">
                        📦
                    </span>
                    <span class="text-xs sm:text-sm font-bold text-slate-900">Send packages with live tracking</span>
                </div>

                <div class="flex items-center gap-3.5">
                    <span class="w-10 h-10 rounded-xl bg-white shadow-xs border border-orange-100 flex items-center justify-center text-[#F97316] text-base shrink-0">
                        📍
                    </span>
                    <span class="text-xs sm:text-sm font-bold text-slate-900">Book rides &amp; airport transfers</span>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="relative z-10 text-xs text-slate-500">
            © 2026 AlabIQ — We DeliveRED. Fast delivery, easy booking.
        </div>
    </div>

    <!-- RIGHT AUTHENTICATION PANEL -->
    <div class="flex-1 bg-white p-6 sm:p-12 lg:p-16 flex flex-col justify-between">
        <!-- Top Back Link -->
        <div>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-600 hover:text-[#D91B24] transition">
                <span>←</span>
                <span>Back to home</span>
            </a>
        </div>

        <!-- Centered Form Container -->
        <div class="w-full max-w-md mx-auto my-10">
            <div class="mb-6">
                <h2 id="auth-heading" class="text-2xl sm:text-3xl font-black text-slate-950 tracking-tight">
                    {{ $initialMode === 'register' ? 'Create account' : 'Sign in' }}
                </h2>
                <p id="auth-subheading" class="text-xs sm:text-sm text-slate-500 mt-1">
                    {{ $initialMode === 'register' ? 'Join AlabIQ to order food, groceries, and rides in Riyadh' : 'Enter your credentials to access your account' }}
                </p>
            </div>

            <!-- Form Card -->
            <div class="rounded-3xl bg-white border border-slate-200/90 shadow-xl shadow-slate-900/5 p-6 sm:p-8">
                <form onsubmit="handleAuthSubmit(event)" class="space-y-5">
                    <!-- Full Name (Visible in Sign Up mode) -->
                    <div id="auth-name-group" class="{{ $initialMode === 'register' ? '' : 'hidden' }}">
                        <label class="block text-[11px] font-extrabold uppercase tracking-wider text-slate-600 mb-2">FULL NAME</label>
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-slate-400 text-sm">👤</span>
                            <input
                                id="auth-name"
                                type="text"
                                placeholder="Enter your full name"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-xs sm:text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-[#F97316]"
                            />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label class="block text-[11px] font-extrabold uppercase tracking-wider text-slate-600 mb-2">EMAIL ADDRESS</label>
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-slate-400 text-sm">✉️</span>
                            <input
                                id="auth-email"
                                type="email"
                                required
                                placeholder="email@alabiq.com"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-xs sm:text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-[#F97316]"
                            />
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-[11px] font-extrabold uppercase tracking-wider text-slate-600 mb-2">PASSWORD</label>
                        <div class="relative flex items-center">
                            <span class="absolute left-3.5 text-slate-400 text-sm">🔒</span>
                            <input
                                id="auth-password"
                                type="password"
                                required
                                placeholder="Enter your password"
                                class="w-full pl-10 pr-10 py-3 rounded-xl border border-slate-200 text-xs sm:text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-[#F97316]"
                            />
                            <button
                                type="button"
                                onclick="togglePasswordVisibility()"
                                class="absolute right-3.5 text-slate-400 hover:text-slate-700 text-sm cursor-pointer"
                                title="Show/Hide Password"
                            >
                                👁️
                            </button>
                        </div>
                        <div class="flex justify-end mt-2">
                            <button
                                type="button"
                                onclick="window.AlabIQ.showToast('Password Reset Link Sent', 'Check your email inbox for instructions to reset your password.')"
                                class="text-xs font-bold text-[#F97316] hover:text-[#D91B24] cursor-pointer"
                            >
                                Forgot password?
                            </button>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 rounded-xl font-bold text-xs sm:text-sm text-white bg-gradient-to-r from-[#F97316] to-[#D91B24] hover:opacity-95 shadow-lg shadow-orange-500/25 flex items-center justify-center gap-2 cursor-pointer transition"
                    >
                        <span>⇥</span>
                        <span id="auth-submit-label">{{ $initialMode === 'register' ? 'Create Account' : 'Sign In' }}</span>
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6 flex items-center justify-center">
                    <div class="border-t border-slate-200 w-full"></div>
                    <span class="bg-white px-3 text-[11px] font-bold uppercase text-slate-400">OR</span>
                    <div class="border-t border-slate-200 w-full"></div>
                </div>

                <!-- Switch Mode Link -->
                <p class="text-center text-xs text-slate-500">
                    <span id="auth-switch-prompt">{{ $initialMode === 'register' ? 'Already have an account?' : "Don't have an account?" }}</span>
                    <button
                        type="button"
                        onclick="toggleAuthMode()"
                        id="auth-switch-btn"
                        class="font-extrabold text-[#F97316] hover:text-[#D91B24] ml-1 cursor-pointer"
                    >
                        {{ $initialMode === 'register' ? 'Sign In' : 'Sign Up' }}
                    </button>
                </p>
            </div>
        </div>

        <div class="text-center lg:text-right text-[11px] text-slate-400">
            Need help? <a href="{{ url('/#faq') }}" class="text-[#F97316] font-bold hover:underline">Visit Help Center</a>
        </div>
    </div>

    @include('partials.modals')

    <script>
        let currentAuthMode = '{{ $initialMode }}';

        function togglePasswordVisibility() {
            const input = document.getElementById('auth-password');
            if (!input) return;
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function toggleAuthMode() {
            currentAuthMode = currentAuthMode === 'login' ? 'register' : 'login';
            const isReg = currentAuthMode === 'register';
            document.getElementById('auth-name-group').classList.toggle('hidden', !isReg);
            document.getElementById('auth-heading').textContent = isReg ? 'Create account' : 'Sign in';
            document.getElementById('auth-subheading').textContent = isReg
                ? 'Join AlabIQ to order food, groceries, and rides in Riyadh'
                : 'Enter your credentials to access your account';
            document.getElementById('auth-submit-label').textContent = isReg ? 'Create Account' : 'Sign In';
            document.getElementById('auth-switch-prompt').textContent = isReg
                ? 'Already have an account?'
                : "Don't have an account?";
            document.getElementById('auth-switch-btn').textContent = isReg ? 'Sign In' : 'Sign Up';
        }

        function handleAuthSubmit(event) {
            event.preventDefault();
            const email = document.getElementById('auth-email').value;
            const name = document.getElementById('auth-name').value;
            window.AlabIQ.loginUser(email, name);
            setTimeout(() => {
                window.location.href = '{{ url('/shop') }}';
            }, 900);
        }
    </script>
</body>
</html>
