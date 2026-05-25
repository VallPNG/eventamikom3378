@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-extrabold mb-2">Daftar Partner</h2>
            <p class="text-slate-500 font-medium">Kelola partner dan sponsor event Anda</p>
        </div>
        <a href="{{ route('partners.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:shadow-xl transition-all">Tambah Partner</a>
    </div>

    @if(session('success'))
        <div class="p-4 mb-8 text-sm text-green-800 rounded-xl bg-green-50 border border-green-200">{{ session('success') }}</div>
    @endif

    <form action="{{ route('partners.index') }}" method="GET" class="mb-8">
        <div class="flex gap-3">
            <input type="text" name="search" class="flex-1 px-5 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" placeholder="Cari partner..." value="{{ request('search') }}">
            <button class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold hover:bg-slate-900 transition shadow-md" type="submit">Cari</button>
        </div>
    </form>

    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50/80 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-5 font-bold tracking-wider">No</th>
                        <th class="px-6 py-5 font-bold tracking-wider">Nama Partner</th>
                        <th class="px-6 py-5 font-bold tracking-wider">Logo</th>
                        <th class="px-6 py-5 font-bold tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($partners as $partner)
                        <tr class="bg-white hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-bold text-slate-900">{{ $partner->name }}</td>
                            <td class="px-6 py-4">
                                @if($partner->logo_url)
                                    <img src="{{ $partner->logo_url }}" alt="Logo {{ $partner->name }}" class="h-10 object-contain rounded-md border border-slate-100 p-1 bg-white">
                                @else
                                    <span class="inline-block px-3 py-1 bg-slate-100 text-slate-500 rounded-full text-xs font-medium">Tidak ada logo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('partners.edit', $partner->id) }}" class="px-4 py-2 text-sm font-bold text-amber-600 bg-amber-50 rounded-lg hover:bg-amber-100 transition">Edit</a>
                                    <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 text-sm font-bold text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-slate-500 font-medium">Data partner tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="mt-8">
        {{ $partners->links() }}
    </div>
</div>
@endsection
