@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Partner</h2>
        <a href="{{ route('partners.create') }}" class="btn btn-primary">Tambah Partner</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('partners.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari partner..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Partner</th>
                <th>Logo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($partners as $partner)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $partner->name }}</td>
                    <td>
                        @if($partner->logo_url)
                            <img src="{{ $partner->logo_url }}" alt="Logo {{ $partner->name }}" style="max-height: 50px;">
                        @else
                            <span class="text-muted">Tidak ada logo</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data partner tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    {{ $partners->links() }}
</div>
@endsection
