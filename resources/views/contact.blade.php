@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="max-w-4xl mx-auto flex flex-col md:flex-row gap-12 lg:mt-8">
    <!-- Info Side -->
    <div class="flex-1">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight mb-4">Halo, ada yang bisa dibantu?</h2>
        <p class="text-slate-500 text-lg mb-10 leading-relaxed">Jangan ragu hubungi kami jika terdapat kendala pada sistem, pertanyaan lebih spesifik mengenai acara, maupun pendaftaran event Anda.</p>
        
        <div class="space-y-6">
            <div class="flex items-center gap-4 border border-slate-100 p-4 rounded-2xl bg-white">
                <div class="w-12 h-12 bg-purple-50 text-purple-800 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Email Cepat</p>
                    <p class="text-slate-800 font-semibold">admin@amikomeventhub.com</p>
                </div>
            </div>
            
            <div class="flex items-center gap-4 border border-slate-100 p-4 rounded-2xl bg-white">
                <div class="w-12 h-12 bg-purple-50 text-purple-800 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Kampus Terpadu</p>
                    <p class="text-slate-800 font-semibold">Jl. Ring Road Utara, Condongcatur, Sleman</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Form Side -->
    <div class="flex-1 bg-white p-8 rounded-[2rem] border border-slate-200 shadow-sm relative">
        <form class="space-y-5">
            <div>
                <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Pengirim</label>
                <input type="text" id="name" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors bg-slate-50 focus:bg-white outline-none" placeholder="Valedhika">
            </div>
            <div>
                <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Alamat Email</label>
                <input type="email" id="email" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors bg-slate-50 focus:bg-white outline-none" placeholder="valedhika@students.amikom">
            </div>
            <div>
                <label for="message" class="block text-sm font-bold text-slate-700 mb-2">Pesan</label>
                <textarea id="message" rows="4" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors bg-slate-50 focus:bg-white outline-none resize-none" placeholder="Sampaikan kendala Anda..."></textarea>
            </div>
            <button type="button" class="w-full bg-purple-800 text-white font-bold py-3.5 px-6 rounded-xl hover:bg-purple-900 transition-colors text-center shadow-sm">
                Kirim Laporan
            </button>
        </form>
    </div>
</div>
@endsection