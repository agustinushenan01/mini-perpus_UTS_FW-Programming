@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')

<h2 class="mb-4">Edit Kategori</h2>

@if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('categories.update', $category) }}"
    method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label class="form-label">
            Nama Kategori
        </label>

        <input type="text"
            name="name"
            value="{{ old('name', $category->name) }}"
            class="form-control">

    </div>

    <div class="mb-3">

        <label class="form-label">
            Deskripsi
        </label>

        <textarea name="description"
            class="form-control"
            rows="4">{{ old('description', $category->description) }}</textarea>

    </div>

    <button class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('categories.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection