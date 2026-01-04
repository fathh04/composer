@extends('layout.masterGuru')
@section('title', 'Kelas - HTMLVirtual')
@section('menuKelas', 'active')

@section('content')
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
</style>
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
                    @if ($errors->has('idkelas'))
                        <div class="border border-danger bg-danger bg-opacity-10 text-danger rounded-3 px-3 py-2 d-flex align-items-center gap-2">
                            <svg width="18" height="18" fill="currentColor" class="bi bi-info-circle-fill">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533l.738-3.468c.194-.897-.105-1.319-.808-1.319z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                            <span class="fw-semibold">{{ $errors->first('idkelas') }}</span>
                        </div>
                    @endif
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
            <div class="card class-card border-0 shadow-sm h-100">

                <!-- HEADER CARD -->
                <div class="class-header">
                    <div class="class-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h6 class="mb-1 fw-semibold">{{ $item->idkelas }}</h6>
                    <small class="opacity-75">{{ $item->pelajaran }}</small>
                </div>

                <!-- BODY -->
                <div class="card-body text-center d-flex flex-column">
                    <p class="fw-semibold text-muted mb-4">
                        {{ $item->namaKelas }}
                    </p>

                    <div class="mt-auto d-flex justify-content-center gap-2">

                        <a href="{{ route('kelas.masuk', $item->id) }}"
                           class="btn btn-primary action-btn"
                           title="Masuk Kelas">
                            <i class="bi bi-door-open"></i>
                        </a>

                        <button class="btn btn-warning action-btn"
                                title="Edit"
                                data-bs-toggle="modal"
                                data-bs-target="#editKelas{{ $item->id }}">
                            <i class="bi bi-pencil"></i>
                        </button>

                        <form action="{{ route('kelas.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger action-btn"
                                    title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                    </div>
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

@if (session('success'))
@php
    $type = session('success_type');

    $config = match ($type) {
        'create' => [
            'icon' => 'bi-plus-circle-fill',
            'color' => 'success',
            'title' => 'Berhasil Membuat Kelas'
        ],
        'update' => [
            'icon' => 'bi-pencil-square',
            'color' => 'primary',
            'title' => 'Perubahan Disimpan'
        ],
        'delete' => [
            'icon' => 'bi-trash-fill',
            'color' => 'danger',
            'title' => 'Kelas Dihapus'
        ],
        default => [
            'icon' => 'bi-check-circle-fill',
            'color' => 'success',
            'title' => 'Informasi'
        ],
    };
@endphp

<div class="modal fade" id="successModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow border-0">

            <div class="modal-header border-0 bg-{{ $config['color'] }} bg-opacity-10">
                <h5 class="modal-title fw-bold text-{{ $config['color'] }}">
                    <i class="bi {{ $config['icon'] }} me-2"></i>
                    {{ $config['title'] }}
                </h5>
            </div>

            <div class="modal-body text-center py-4">
                <p class="fw-semibold mb-2">
                    {{ session('success') }}
                </p>
                <small class="text-muted">
                    Modal akan tertutup otomatis
                </small>
            </div>

        </div>
    </div>
</div>
@endif

@endsection

@if ($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let modal = new bootstrap.Modal(document.getElementById('tambahkelas'));
        modal.show();
    });
</script>
@endif

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalEl = document.getElementById('successModal');
    if (!modalEl) return;

    const modal = new bootstrap.Modal(modalEl);
    modal.show();

    setTimeout(() => {
        modal.hide();
    }, 4000);
});
</script>
