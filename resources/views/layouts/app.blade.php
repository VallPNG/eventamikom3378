<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub - @yield('title', 'Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#FAFAFA] text-slate-800 antialiased min-h-screen flex flex-col">
    <!-- Navigation Menu (Minimalist White & Purple) -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-center py-4 sm:h-20 gap-4 sm:gap-0">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-purple-800 font-extrabold text-2xl tracking-tight flex items-center gap-2 group">
                        <div class="bg-purple-800 text-white p-2 rounded-lg group-hover:bg-purple-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                        </div>
                        <span>Amikom<span class="text-slate-800">Event</span></span>
                    </a>
                </div>
                
                <!-- Links Styled as Buttons -->
                <div class="flex flex-wrap justify-center gap-2">
                    <a href="/" class="{{ request()->is('/') ? 'bg-purple-50 text-purple-800 border-purple-200' : 'text-slate-600 border-transparent hover:bg-slate-50 hover:text-slate-900 hover:border-slate-200' }} px-4 py-2 rounded-full text-sm font-semibold transition-all border flex items-center">
                        Home
                    </a>
                    <a href="/profil" class="{{ request()->is('profil') ? 'bg-purple-50 text-purple-800 border-purple-200' : 'text-slate-600 border-transparent hover:bg-slate-50 hover:text-slate-900 hover:border-slate-200' }} px-4 py-2 rounded-full text-sm font-semibold transition-all border flex items-center">
                        Profil
                    </a>
                    <a href="/katalog" class="{{ request()->is('katalog') ? 'bg-purple-50 text-purple-800 border-purple-200' : 'text-slate-600 border-transparent hover:bg-slate-50 hover:text-slate-900 hover:border-slate-200' }} px-4 py-2 rounded-full text-sm font-semibold transition-all border flex items-center">
                        Katalog
                    </a>
                    <a href="/bantuan" class="{{ request()->is('bantuan') ? 'bg-purple-50 text-purple-800 border-purple-200' : 'text-slate-600 border-transparent hover:bg-slate-50 hover:text-slate-900 hover:border-slate-200' }} px-4 py-2 rounded-full text-sm font-semibold transition-all border flex items-center">
                        Bantuan
                    </a>
                    <a href="/kontak" class="{{ request()->is('kontak') ? 'bg-purple-50 text-purple-800 border-purple-200' : 'text-slate-600 border-transparent hover:bg-slate-50 hover:text-slate-900 hover:border-slate-200' }} px-4 py-2 rounded-full text-sm font-semibold transition-all border flex items-center">
                        Kontak
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        @yield('content')
    </main>

    <!-- Footer Minimalist -->
    <footer class="bg-white border-t border-slate-200 py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex justify-center items-center gap-2 text-purple-800 font-bold text-lg mb-2">
                <svg class="w-5 h-5 text-purple-700" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                AmikomEvent
            </div>
            <p class="text-slate-500 text-sm">
                &copy; {{ date('Y') }} Universitas Amikom Yogyakarta. All rights reserved. <br/>
            </p>
        </div>
    </footer>
</body>
</html>
