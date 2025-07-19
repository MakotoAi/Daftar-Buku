@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2 class="mb-4 text-center">Daftar Buku</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('books.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row g-2">
            <div class="col-md-4"><input type="text" name="title" class="form-control" placeholder="Judul Buku" required></div>
            <div class="col-md-3"><input type="text" name="author" class="form-control" placeholder="Penulis" required></div>
            <div class="col-md-2"><input type="number" name="year" class="form-control" placeholder="Tahun" required></div>
            <div class="col-md-2"><button type="submit" class="btn btn-custom">Tambah Buku</button></div>
        </div>
    </form>

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th style="width: 50px;">No</th>
                <th style="width: 250px;">Judul</th>
                <th style="width: 200px;">Penulis</th>
                <th style="width: 100px;">Tahun</th>
                <th style="width: 100px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td style="word-wrap: break-word; white-space: normal;">{{ $book->title }}</td>
                <td style="word-wrap: break-word; white-space: normal;">{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-custom btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
