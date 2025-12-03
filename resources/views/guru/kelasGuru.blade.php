@extends('layout.masterGuru')
@section('title', 'Kelas - HTMLVirtual')
@section('menuKelas', 'active')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahkelas"><b>Buat Kelas</b></button>
    </div>

    <div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="tambahkelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahkelasLabel">Buat Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="idkelas" class="col-form-label">ID Kelas</label>
                            <input type="text" name="idkelas" id="idkelas" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="namakelas" class="col-form-label">Nama Kelas</label>
                            <input type="text" name="namakelas" id="namakelas" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="pelajaran" class="col-form-label">Mata Pelajaran</label>
                            <input type="text" name="pelajaran" id="pelajaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengampu" class="col-form-label">Guru Pengampu</label>
                            <input type="text" name="pengampu" id="pengampu" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h4 fw-bold">Kelas Anda</h1>
    <div class="row">
        @foreach ($kelas as $item)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg rounded border-0 h-100 hover-shadow">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center text-primary fw-bold"><b>{{ $item->idkelas }}</b></h5>
                    <p class="card-text text-muted text-center mb-4">{{ $item->namaKelas }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('kelas.masuk', $item->id) }}" class="btn btn-primary btn-sm">Masuk</a>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editKelas{{ $item->id }}">
                            Edit
                        </button>
                    </div>
                    <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editKelas{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Edit Kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('kelas.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="namakelas" class="form-label">Nama Kelas</label>
                                <input type="text" name="namakelas" id="namakelas" class="form-control"
                                    value="{{ $item->namaKelas }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pelajaran" class="form-label">Pelajaran</label>
                                <input type="text" name="pelajaran" id="pelajaran" class="form-control"
                                    value="{{ $item->pelajaran }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pengampu" class="form-label">Pengampu</label>
                                <input type="text" name="pengampu" id="pengampu" class="form-control"
                                    value="{{ $item->pengampu }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
