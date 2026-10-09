@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')

<h2 class="mb-4">Tambah Kategori</h2>

@if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('categories.store') }}"
    method="POST">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Nama Kategori
        </label>

        <input type="text"
            name="name"
            value="{{ old('name') }}"
            class="form-control">

        @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Deskripsi
        </label>

        <textarea name="description"
            class="form-control"
            rows="4">{{ old('description') }}</textarea>

        @error('description')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

    <a href="{{ route('categories.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection