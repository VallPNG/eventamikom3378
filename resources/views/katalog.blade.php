@extends('layouts.app')

@section('title', 'Katalog Event')

@section('content')
<div class="mb-10 flex flex-col sm:flex-row sm:items-center justify-between gap-6">
    <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight">Katalog Kegiatan</h2>
        <p class="text-slate-500 mt-2">Daftar agenda Amikom terbaru hari ini.</p>
    </div>
    
    <div class="flex flex-wrap gap-3">
        <select class="pl-4 pr-10 py-2.5 bg-white border border-slate-200 rounded-full text-slate-700 text-sm font-medium focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 appearance-none">
            <option>Semua Kategori</option>
            <option>Seminar</option>
            <option>Workshop</option>
            <option>Lomba</option>
        </select>
        <button class="bg-purple-50 text-purple-800 px-6 py-2.5 rounded-full text-sm font-bold border border-purple-100 hover:bg-purple-100 transition-colors">
            Cari
        </button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Item 1 -->
    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-purple-300 transition-all duration-300 flex flex-col group">
        <div class="h-44 bg-slate-50 flex items-center justify-center border-b border-slate-100 relative p-6">
            <div class="w-16 h-16 bg-white rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center text-purple-800 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
            </div>
        </div>
        <div class="p-8 flex-grow flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <span class="text-purple-800 bg-purple-50 border border-purple-100 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Seminar</span>
                <span class="text-slate-400 text-sm font-medium">24 Okt 2025</span>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-purple-800 transition-colors">Pengenalan Web Modern</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">Membahas tren pengembangan web, framework backend, serta implementasi UI modern 2024.</p>
            
            <a href="#" class="block text-center w-full py-3 bg-white text-slate-800 border border-slate-200 font-bold rounded-xl hover:border-purple-800 hover:text-purple-800 hover:bg-purple-50 transition-colors">
                Lihat Detail
            </a>
        </div>
    </div>

    <!-- Item 2 -->
    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-purple-300 transition-all duration-300 flex flex-col group">
        <div class="h-44 bg-slate-50 flex items-center justify-center border-b border-slate-100 relative p-6">
            <div class="w-16 h-16 bg-white rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center text-purple-800 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
            </div>
        </div>
        <div class="p-8 flex-grow flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <span class="text-purple-800 bg-purple-50 border border-purple-100 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Workshop</span>
                <span class="text-slate-400 text-sm font-medium">05 Nov 2025</span>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-purple-800 transition-colors">UI/UX Design Masterclass</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">Praktik merancang antarmuka berbasis kebutuhan pengguna dari wireframe ke purwarupa (prototype).</p>
            
            <a href="#" class="block text-center w-full py-3 bg-white text-slate-800 border border-slate-200 font-bold rounded-xl hover:border-purple-800 hover:text-purple-800 hover:bg-purple-50 transition-colors">
                Lihat Detail
            </a>
        </div>
    </div>
    
    <!-- Item 3 -->
    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-purple-300 transition-all duration-300 flex flex-col group">
        <div class="h-44 bg-slate-50 flex items-center justify-center border-b border-slate-100 relative p-6">
            <div class="w-16 h-16 bg-white rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center text-purple-800 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div class="absolute top-4 right-4 flex items-center gap-2">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-purple-600"></span>
                </span>
            </div>
        </div>
        <div class="p-8 flex-grow flex flex-col">
            <div class="flex justify-between items-center mb-4">
                <span class="text-purple-800 bg-purple-50 border border-purple-100 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Lomba</span>
                <span class="text-slate-400 text-sm font-medium">15 Des 2025</span>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-purple-800 transition-colors">Amikom Hackathon 2025</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">Lomba menciptakan aplikasi dengan studi kasus masalah terkini dalam durasi waktu 48 jam penuh.</p>
            
            <a href="#" class="block text-center w-full py-3 bg-purple-800 text-white font-bold rounded-xl hover:bg-purple-900 transition-colors">
                Daftar Sekarang
            </a>
        </div>
    </div>

</div>
@endsection
