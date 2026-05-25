@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="mb-8">
        <h2 class="text-3xl font-extrabold mb-2">Tambah Partner</h2>
        <p class="text-slate-500 font-medium">Tambahkan partner atau sponsor baru</p>
    </div>

    @if ($errors->any())
        <div class="p-4 mb-8 text-sm text-red-800 rounded-xl bg-red-50 border border-red-200">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8">
        <form action="{{ route('partners.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Partner</label>
                <input type="text" name="name" id="name" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" value="{{ old('name') }}" required>
            </div>
            <div class="mb-6">
                <label for="logo_url" class="block text-sm font-bold text-slate-700 mb-2">URL Logo (Opsional)</label>
                <input type="url" name="logo_url" id="logo_url" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" value="{{ old('logo_url') }}">
            </div>
            <div class="flex gap-4 pt-4 border-t border-slate-100">
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:shadow-xl transition-all">Simpan</button>
                <a href="{{ route('partners.index') }}" class="px-8 py-3 bg-slate-100 text-slate-700 rounded-xl font-bold hover:bg-slate-200 transition">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
