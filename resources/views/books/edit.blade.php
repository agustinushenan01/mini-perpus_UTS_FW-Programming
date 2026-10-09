@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

<h2 class="mb-4">Edit Buku</h2>

@if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('books.update', $book) }}"
    method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label class="form-label">
            Judul Buku
        </label>

        <input type="text"
            name="title"
            value="{{ old('title', $book->title) }}"
            class="form-control">

    </div>

    <div class="mb-3">

        <label class="form-label">
            Penulis
        </label>

        <input type="text"
            name="author"
            value="{{ old('author', $book->author) }}"
            class="form-control">

    </div>

    <div class="mb-3">

        <label class="form-label">
            Kategori
        </label>

        <select name="category_id"
                class="form-select">

            @foreach($categories as $category)

                <option value="{{ $category->id }}"
                    {{ $book->category_id == $category->id ? 'selected' : '' }}>

                    {{ $category->name }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Tahun Terbit
        </label>

        <input type="number"
            name="published_year"
            value="{{ old('published_year', $book->published_year) }}"
            class="form-control">

    </div>

    <div class="mb-3">

        <label class="form-label">
            Stok
        </label>

        <input type="number"
            name="stock"
            value="{{ old('stock', $book->stock) }}"
            class="form-control">

    </div>

    <button class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('books.index') }}"
        class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection