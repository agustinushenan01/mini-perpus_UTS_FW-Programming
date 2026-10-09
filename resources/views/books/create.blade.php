@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')

<h2 class="mb-4">Tambah Buku</h2>

@if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('books.store') }}"
    method="POST">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Judul Buku
        </label>

        <input type="text"
            name="title"
            value="{{ old('title') }}"
            class="form-control">

        @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Penulis
        </label>

        <input type="text"
            name="author"
            value="{{ old('author') }}"
            class="form-control">

        @error('author')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Kategori
        </label>

        <select name="category_id"
                class="form-select">

            <option value="">
                -- Pilih Kategori --
            </option>

            @foreach($categories as $category)

                <option value="{{ $category->id }}"
                    {{ old('category_id') == $category->id ? 'selected' : '' }}>

                    {{ $category->name }}

                </option>

            @endforeach

        </select>

        @error('category_id')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Tahun Terbit
        </label>

        <input type="number"
            name="published_year"
            value="{{ old('published_year') }}"
            class="form-control">

        @error('published_year')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Stok
        </label>

        <input type="number"
            name="stock"
            value="{{ old('stock', 0) }}"
            class="form-control">

        @error('stock')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

    <a href="{{ route('books.index') }}"
        class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection