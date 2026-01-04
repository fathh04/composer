@extends('layout.masterAuditori')
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
                    {{-- ALERT ERROR --}}
                    @if ($errors->has('idkelas'))
                        <div class="alert alert-danger border-0 shadow-sm rounded-3 d-flex align-items-center mb-3">
                            <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
                            <div>
                                <span class="small">{{ $errors->first('idkelas') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- ALERT SESSION --}}
                    @if (session('error'))
                        <div class="alert alert-warning border-0 shadow-sm rounded-3 d-flex align-items-center mb-3">
                            <i class="bi bi-info-circle-fill me-3 fs-4"></i>
                            <div>
                                <span class="small">{{ session('error') }}</span>
                            </div>
                        </div>
                    @endif
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
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card class-card border-0 shadow-sm h-100">

                    <!-- HEADER -->
                    <div class="class-header">
                        <div class="class-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <h6 class="mb-1 fw-semibold">{{ $item->pelajaran }}</h6>
                        <small class="opacity-75">ID: {{ $item->idkelas }}</small>
                    </div>

                    <!-- BODY -->
                    <div class="card-body text-center d-flex flex-column">
                        <p class="fw-semibold text-muted mb-4">
                            {{ $item->namaKelas }}
                        </p>

                        <div class="mt-auto d-flex justify-content-center gap-2">

                            <!-- MASUK KELAS -->
                            <a href="{{ route('siswa.kelas.masuk', $item->id) }}"
                            class="btn btn-primary action-btn"
                            title="Masuk Kelas">
                                <i class="bi bi-door-open"></i>
                            </a>

                            <!-- KELUAR KELAS -->
                            <button class="btn btn-danger action-btn"
                                    title="Keluar Kelas"
                                    data-bs-toggle="modal"
                                    data-bs-target="#keluarKelasModal{{ $item->id }}">
                                <i class="bi bi-box-arrow-right"></i>
                            </button>

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

@if (session('success'))
<!-- MODAL INFORMASI BERHASIL -->
<div class="modal fade" id="kelasBerhasilModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg border-0">

            <div class="modal-header border-0 bg-success bg-opacity-10">
                <h5 class="modal-title text-success fw-bold">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Informasi
                </h5>
            </div>

            <div class="modal-body text-center py-4">
                <p class="fs-6 mb-2 fw-semibold">
                    {{ session('success') }}
                </p>
                <p class="small text-muted mb-0">
                    Modal ini akan tertutup otomatis dalam 5 detik
                </p>
            </div>

        </div>
    </div>
</div>
@endif

@endsection

<!-- Add some custom CSS for style enhancements -->
@section('styles')
<style>
    .class-card {
        border-radius: 20px;
        transition: .3s ease;
        overflow: hidden;
    }
    .class-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(13,110,253,.18);
    }
    .class-header {
        background: linear-gradient(135deg, #0d6efd, #4f8cff);
        color: #fff;
        padding: 20px;
        text-align: center;
    }
    .class-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(255,255,255,.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin: 0 auto 10px;
    }
    .action-btn {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
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

@if ($errors->any() || session()->has('error'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let modal = new bootstrap.Modal(document.getElementById('tambahkelas'));
        modal.show();
    });
</script>
@endif

@if (session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalEl = document.getElementById('kelasBerhasilModal');
    const modal = new bootstrap.Modal(modalEl);

    modal.show();

    setTimeout(() => {
        modal.hide();
    }, 5000);
});
</script>
@endif
