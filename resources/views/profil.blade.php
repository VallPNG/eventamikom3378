@extends('layouts.app')

@section('title', 'Profil Praktikan')

@section('content')
<div class="max-w-xl mx-auto mt-4 sm:mt-12">
    <div class="bg-white rounded-[2rem] border border-slate-200 overflow-hidden relative">
        <!-- Minimalist Header -->
        <div class="h-32 bg-slate-50 border-b border-slate-100 relative">
            <div class="absolute inset-0 pattern-dots text-slate-200/50 opacity-50" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 16px 16px;"></div>
        </div>
        
        <div class="px-8 pb-12">
            <!-- Profile Image overlapping header -->
            <div class="flex justify-center -mt-16 mb-6">
                <div class="h-32 w-32 rounded-3xl border-4 border-white bg-white shadow-sm flex items-center justify-center overflow-hidden rotate-3 hover:rotate-0 transition-transform duration-300">
                    <img src="https://i.pinimg.com/736x/e3/f5/7a/e3f57ac56306d083fc895d415ca5b7b0.jpg" alt="Avatar" class="w-full h-full object-cover rounded-3xl">
                </div>
            </div>
            
            <!-- Details -->
            <div class="text-center">
                <h2 class="text-2xl font-extrabold text-slate-800 mb-1">VALEDHIKA FIKRI</h2>
                <p class="text-purple-800 font-medium text-sm mb-6 uppercase tracking-widest bg-purple-50 inline-block px-3 py-1 rounded-full border border-purple-100">
                    Mahasiswa Amikom
                </p>
                
                <p class="text-slate-500 mb-10 max-w-sm mx-auto text-[15px] leading-relaxed relative">
                    <span class="text-slate-300 text-4xl absolute -top-4 -left-2 leading-none font-serif">"</span>
                    Seorang antusias teknologi yang senang mengeksplorasi pembuatan aplikasi mandiri yang ringkas dan fungsional.
                    <span class="text-slate-300 text-4xl absolute -bottom-6 -right-2 leading-none font-serif rotate-180">"</span>
                </p>
                
                <div class="grid grid-cols-2 gap-4 max-w-sm mx-auto text-left">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                        <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">NIM</p>
                        <p class="text-slate-800 font-bold">24.12.3378</p>
                    </div>
                    
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                        <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider mb-1">Prodi</p>
                        <p class="text-slate-800 font-bold truncate">Sistem Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
