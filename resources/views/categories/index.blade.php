@extends('layouts.app')

@section('title', 'Kategori')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">

    <h2>Daftar Kategori</h2>

    <a href="{{ route('categories.create') }}"
        class="btn btn-primary">
        + Tambah Kategori
    </a>

</div>

<div class="table-responsive">
<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Jumlah Buku</th>
            <th width="180">Aksi</th>
        </tr>

    </thead>

    <tbody>

        @forelse($categories as $category)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $category->name }}</td>

            <td>{{ $category->description ?? '-' }}</td>

            <td>{{ $category->books_count }}</td>

            <td>

                <a href="{{ route('categories.edit', $category) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('categories.destroy', $category) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="5"
                class="text-center">
                Belum ada kategori.
            </td>
        </tr>

        @endforelse

    </tbody>

</table>
</div>

@endsection