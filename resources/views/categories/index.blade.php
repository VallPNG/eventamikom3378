@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-extrabold mb-2">Daftar Kategori</h2>
            <p class="text-slate-500 font-medium">Kelola kategori event Anda</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:shadow-xl transition-all">Tambah Kategori</a>
    </div>

    @if(session('success'))
        <div class="p-4 mb-8 text-sm text-green-800 rounded-xl bg-green-50 border border-green-200">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.categories.index') }}" method="GET" class="mb-8">
        <div class="flex gap-3">
            <input type="text" name="search" class="flex-1 px-5 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" placeholder="Cari kategori..." value="{{ request('search') }}">
            <button class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold hover:bg-slate-900 transition shadow-md" type="submit">Cari</button>
        </div>
    </form>

    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50/80 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-5 font-bold tracking-wider">No</th>
                        <th class="px-6 py-5 font-bold tracking-wider">Nama Kategori</th>
                        <th class="px-6 py-5 font-bold tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($categories as $category)
                        <tr class="bg-white hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-bold text-slate-900">{{ $category->name }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 text-sm font-bold text-amber-600 bg-amber-50 rounded-lg hover:bg-amber-100 transition">Edit</a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 text-sm font-bold text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-12 text-center text-slate-500 font-medium">Data kategori tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="mt-8">
        {{ $categories->links() }}
    </div>
</div>
@endsection
