@extends('layouts.app')

@section('title', 'Bantuan & FAQ')

@section('content')
<div class="max-w-2xl mx-auto lg:mt-8">
    <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight">Kamus Bantuan</h2>
        <p class="text-slate-500 mt-4 text-lg">Pertanyaan seputar platform AmikomEventHub.</p>
    </div>

    <div class="space-y-6">
        <!-- Item 1 -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200">
            <h3 class="text-lg font-bold text-slate-800 flex items-start">
                <span class="text-purple-800 mr-4 font-black">Q.</span>
                Apa kegunaan utama AmikomEventHub?
            </h3>
            <p class="mt-4 text-slate-600 leading-relaxed text-[15px] border-l-2 border-purple-100 pl-6 ml-2">
                AmikomEventHub adalah platform pusat yang meminimalisasi kerumitan pencarian dan manajemen acara (seperti lomba, seminar, workshop) di area Universitas Amikom Yogyakarta. Mahasiswa dapat melihat detail dan langsung melakukan pendaftaran di satu tempat.
            </p>
        </div>

        <!-- Item 2 -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200">
            <h3 class="text-lg font-bold text-slate-800 flex items-start">
                <span class="text-purple-800 mr-4 font-black">Q.</span>
                Bagaimana cara ikut berpartisipasi dalam event?
            </h3>
            <p class="mt-4 text-slate-600 leading-relaxed text-[15px] border-l-2 border-purple-100 pl-6 ml-2">
                Hanya butuh tiga langkah: Buka menu <b>Katalog</b>, pilih kegiatan yang diinginkan lalu klik 'Lihat Detail', dan tekan tombol registrasi mandiri untuk mengonfirmasi partisipasi Anda.
            </p>
        </div>

        <!-- Item 3 -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200">
            <h3 class="text-lg font-bold text-slate-800 flex items-start">
                <span class="text-purple-800 mr-4 font-black">Q.</span>
                Apakah terdapat biaya dalam registrasi?
            </h3>
            <p class="mt-4 text-slate-600 leading-relaxed text-[15px] border-l-2 border-purple-100 pl-6 ml-2">
                Mayoritas acara inter-kampus (seperti UKM) dapat diikuti secara gratis. Biaya tambahan biasanya hanya berlaku untuk sertifikasi profesional eksternal atau mendatangkan pemateri luar yang membutuhkan HTM.
            </p>
        </div>
    </div>
    
    <div class="mt-16 text-center">
        <a href="/kontak" class="inline-flex items-center text-purple-800 font-bold hover:text-purple-600 transition-colors">
            Punya pertanyaan lain? Hubungi Kami
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
</div>
@endsection
