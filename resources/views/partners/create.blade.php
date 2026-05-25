@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Partner</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('partners.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Partner</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="logo_url" class="form-label">URL Logo (Opsional)</label>
            <input type="url" name="logo_url" class="form-control" id="logo_url" value="{{ old('logo_url') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('partners.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
