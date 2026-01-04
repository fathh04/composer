@extends('layout.masterGuru')
@section('title', 'Dashboard Guru - HTMLVirtual')
@section('menuBeranda', 'active')
@php
    use App\Models\Kelas;
    $totalSiswa = Kelas::where('pengguna_id', auth()->id())
        ->withCount('pengguna')
        ->get()
        ->sum('pengguna_count');
@endphp
@section('content')
<div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-primary mb-1">Selamat Datang, {{ session('user_name') }} </h1>
            <p class="text-muted">Kelola kelas dan pantau aktivitas pembelajaran Anda.</p>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card shadow-sm border-0 rounded-4 p-4 bg-primary text-white">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-white text-primary me-3">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold">{{ $jumlahKelasGuru }}</h2>
                        <p class="m-0">Jumlah Kelas Aktif</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card shadow-sm rounded-4 p-4 bg-light">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-primary text-white me-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold">{{ $totalSiswa }}</h2>
                        <p class="m-0">Siswa Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- LIST KELAS --}}
    @php
        $kelasGuru = $kelas->where('pengguna_id', auth()->id());
    @endphp

    @if ($kelasGuru->isNotEmpty())
        <div class="mt-5">
            <h3 class="fw-bold text-primary mb-3">Daftar Kelas Anda</h3>

            <div class="row g-4">
                @foreach ($kelasGuru as $item)
                    <div class="col-md-4">
                        <div class="kelas-card shadow-sm rounded-4 p-4 bg-white">
                            <h5 class="fw-bold text-dark">{{ $item->pelajaran }}</h5>
                            <p class="text-muted small m-0">
                                Kode Kelas: {{ $item->idkelas }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button type="button"
                                        class="badge bg-primary border-0 rounded-pill px-3 py-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalSiswa-{{ $item->id }}">
                                    {{ $item->pengguna()->count() }} siswa
                                </button>
                                <a href="{{ route('kelas.masuk', $item->id) }}"
                                class="btn btn-primary rounded-pill px-4 shadow-sm">
                                    Masuk
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL DAFTAR SISWA -->
                    <div class="modal fade" id="modalSiswa-{{ $item->id }}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content rounded-4 shadow">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title fw-bold">
                                        👥 Daftar Siswa – {{ $item->pelajaran }}
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    @if ($item->pengguna->isNotEmpty())
                                        <ul class="list-group list-group-flush">
                                            @foreach ($item->pengguna as $index => $siswa)
                                                <li class="list-group-item d-flex align-items-center gap-3 siswa-item">
                                                <div class="number-circle">
                                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                                </div>

                                                <div class="flex-grow-1">
                                                    <div class="fw-semibold siswa-nama">{{ $siswa->nama }}</div>
                                                    <small class="siswa-gaya">
                                                        {{ $siswa->gaya_belajar }}
                                                    </small>
                                                </div>

                                                <!-- 🔥 BUTTON KELUARKAN -->
                                                <button type="button"
                                                        class="btn btn-outline-danger btn-sm rounded-pill"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalKeluarkanSiswa-{{ $item->id }}-{{ $siswa->id }}"
                                                        title="Keluarkan siswa">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <div class="text-center text-muted py-4">
                                            Belum ada siswa di kelas ini
                                        </div>
                                    @endif
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================= -->
                    <!-- MODAL KELUARKAN SISWA (DI LUAR) -->
                    <!-- ============================= -->
                    @foreach ($item->pengguna as $siswa)
                    <div class="modal fade"
                        id="modalKeluarkanSiswa-{{ $item->id }}-{{ $siswa->id }}"
                        tabindex="-1">

                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rounded-4 shadow">

                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title fw-bold">
                                        ⚠️ Konfirmasi
                                    </h5>
                                    <button type="button"
                                            class="btn-close btn-close-white"
                                            data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body text-center">
                                    <p class="mb-1">
                                        Yakin ingin mengeluarkan siswa
                                    </p>

                                    <h6 class="fw-bold text-danger">
                                        {{ $siswa->nama }}
                                    </h6>

                                    <small class="text-muted">
                                        dari kelas <strong>{{ $item->pelajaran }}</strong>?
                                    </small>
                                </div>

                                <div class="modal-footer justify-content-center">
                                    <button class="btn btn-secondary rounded-pill px-4"
                                            data-bs-dismiss="modal">
                                        Batal
                                    </button>

                                    <form action="{{ route('guru.kelas.keluarkanSiswa', [$item->id, $siswa->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger rounded-pill px-4">
                                            Keluarkan
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                @endforeach
            </div>
        </div>
    @endif

</div>

<!-- CUSTOM CSS -->
@section('styles')
<style>
    .stat-card {
        transition: transform 0.3s ease;
        border-radius: 1rem;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
    }

    .kelas-card {
        transition: 0.3s ease;
        border-radius: 1rem;
    }

    .kelas-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important;
    }

    .siswa-item {
        border: none;
        border-bottom: 1px solid #f1f3f5;
        padding: 14px 8px;
        transition: background 0.2s ease;
    }

    .siswa-item:hover {
        background: #f8fbff;
    }

    .number-circle {
        width: 40px;
        height: 40px;
        border-radius: 14px; /* rounded modern, bukan bulat polos */
        background: linear-gradient(135deg, #0d6efd, #3f7bff);
        color: #fff;
        font-weight: 700;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(13,110,253,0.35);
        flex-shrink: 0;
    }

    .siswa-nama {
        font-size: 0.95rem;
        color: #212529;
    }

    .siswa-gaya {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #6c757d;
    }
</style>
@endsection
@endsection
