@extends('layout.master')
@section('title', 'Kelas - HTML5VIRTUAL')
@section('menuKelas', 'active')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahkelas"><b>Tambah Kelas</b></button>
    </div>

    <!-- Modal Tambah Kelas -->
    <div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="tambahkelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahkelasLabel">Tambah Kelas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('siswa.kelas.tambah') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="idkelas" class="col-form-label">ID Kelas</label>
                            <input type="text" name="idkelas" id="idkelas" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h4 fw-bold text-center mb-4">Kelas Anda</h1>
    <div class="row g-4">
        @forelse ($kelas as $item)
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card shadow-sm text-center border-light rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold">{{ $item->pelajaran }}</h5>
                        <p class="card-text text-muted">{{ $item->idkelas }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('siswa.kelas.masuk', $item->id) }}" class="btn btn-outline-primary rounded-pill">Masuk</a>
                            <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#keluarKelasModal{{ $item->id }}">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Peringatan Keluar Kelas -->
            <div class="modal fade" id="keluarKelasModal{{ $item->id }}" tabindex="-1" aria-labelledby="keluarKelasModalLabel{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-3 shadow-lg">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="keluarKelasModalLabel{{ $item->id }}">Konfirmasi Keluar Kelas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin keluar dari kelas <b>{{ $item->pelajaran }}</b> ({{ $item->idkelas }})?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <form action="{{ route('siswa.kelas.keluar', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak ada kelas yang ditemukan.</p>
        @endforelse
    </div>
</div>

@endsection

<!-- Add some custom CSS for style enhancements -->
@section('styles')
<style>
    .btn-primary, .btn-success {
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .btn-primary:hover, .btn-success:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .card {
        border: none;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #f8f9fa;
    }

    .modal-footer .btn {
        width: 100px;
    }
</style>
@endsection
