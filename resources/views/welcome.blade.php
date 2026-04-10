@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12 lg:gap-8 mb-20 mt-4">
    <div class="flex-1 text-center lg:text-left">
        <div class="inline-block bg-purple-50 text-purple-700 px-4 py-1.5 rounded-full text-sm font-bold mb-6 border border-purple-100">
            Platform Event Universitas
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 mb-6 leading-[1.2] tracking-tight">
            Eksplorasi Momen <br class="hidden sm:block"/>di <span class="text-purple-800">Amikom</span>.
        </h1>
        <p class="text-lg text-slate-600 mb-10 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
            Temukan, ikuti, dan kelola semua kegiatan kampus mulai dari seminar, perlombaan, hingga workshop dalam satu platform yang bersih dan efisien.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
            <a href="/katalog" class="bg-purple-800 text-white px-8 py-3.5 rounded-full font-semibold hover:bg-purple-900 shadow-sm transition-colors text-center text-lg">
                Jelajahi Event
            </a>
            <a href="/profil" class="bg-white text-slate-700 border border-slate-300 px-8 py-3.5 rounded-full font-semibold hover:bg-slate-50 hover:border-purple-300 hover:text-purple-800 transition-colors text-center text-lg">
                Lihat Profil
            </a>
        </div>
    </div>
    <div class="flex-1 flex justify-center lg:justify-end relative w-full max-w-md lg:max-w-none">
        <!-- Minimalist Abstraction -->
        <div class="relative w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96">
            <!-- Background circles representing connection/events -->
            <div class="absolute inset-0 bg-purple-100 rounded-full opacity-60 m-4 sm:m-8"></div>
            <div class="absolute top-0 right-0 bg-white border border-slate-100 shadow-xl rounded-2xl p-6 w-40 sm:w-48 transform rotate-6 animate-pulse">
                <div class="h-4 w-1/2 bg-slate-200 rounded mb-2"></div>
                <div class="h-3 w-full bg-slate-100 rounded mb-4"></div>
                <div class="h-10 w-full bg-purple-100 rounded-lg flex items-center justify-center">
                    <div class="h-4 w-4 bg-purple-800 rounded-full"></div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 bg-white border border-slate-100 shadow-lg rounded-2xl p-6 w-40 sm:w-48 transform -rotate-3 z-10 transition-transform hover:scale-105">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <div class="h-3 w-3/4 bg-slate-200 rounded mb-2"></div>
                <div class="h-2 w-1/2 bg-slate-100 rounded"></div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section Minimalist -->
<div class="mt-20 border-t border-slate-200 pt-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-slate-800">Kenapa Menggunakan Aplikasi Ini?</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-12">
        <div class="text-center p-6 bg-white rounded-2xl border border-slate-100">
            <div class="w-14 h-14 mx-auto bg-purple-50 text-purple-800 rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3">Pencarian Mudah</h3>
            <p class="text-slate-600">Temukan informasi kegiatan paling up-to-date di lingkungan kampus tanpa kesulitan.</p>
        </div>
        
        <div class="text-center p-6 bg-white rounded-2xl border border-slate-100">
            <div class="w-14 h-14 mx-auto bg-purple-50 text-purple-800 rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3">Registrasi Praktis</h3>
            <p class="text-slate-600">Cukup dengan satu klik, kursi Anda pada event telah teramankan ke dalam sistem.</p>
        </div>
        
        <div class="text-center p-6 bg-white rounded-2xl border border-slate-100">
            <div class="w-14 h-14 mx-auto bg-purple-50 text-purple-800 rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3">Terstruktur</h3>
            <p class="text-slate-600">Seluruh jadwal, pemateri, hingga lokasi dapat diakses dan tercatat secara rapi.</p>
        </div>
    </div>
</div>
@endsection
