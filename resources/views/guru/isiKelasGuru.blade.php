@extends('layout.masterGuru')
@section('title', 'Kelola Kelas - HTMLExplore')
@section('menuKelas', 'active')
@section('content')
<div class="container py-5">
    <h1 class="h3 fw-bold text-center mb-4">Kelola Kelas: Tambah Materi dan Buat Kuis</h1>

    <ul class="nav nav-pills justify-content-center mb-4" id="kelasTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active px-4 py-2" id="tambah-materi-tab" data-bs-toggle="tab" data-bs-target="#tambah-materi" type="button" role="tab" aria-controls="tambah-materi" aria-selected="true">
                <i class="bi bi-plus-circle me-2"></i>Tambah Materi
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard" type="button" role="tab" aria-controls="leaderboard" aria-selected="false">
                <i class="bi bi-trophy me-2"></i>Leaderboard
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi" type="button" role="tab" aria-controls="informasi" aria-selected="false">
                <i class="bi bi-collection me-2"></i>Feed Pembelajaran
            </button>
        </li>
    </ul>

    <div class="tab-content" id="kelasTabContent">

         <!-- Tab Leaderboard -->
<div class="tab-pane fade" id="leaderboard" role="tabpanel" aria-labelledby="leaderboard-tab">
    <h3 class="mb-4 text-center text-primary fw-bold">🏆 Peringkat Siswa Terbaik</h3>
    <div class="card shadow rounded-4 border-0">
        <div class="card-body p-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 py-3">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-warning text-dark me-3 fs-5 rounded-circle" style="width: 40px; height: 40px;">🥇</span>
                        <span class="fs-5 fw-semibold"><i class="bi bi-person-fill me-2 text-secondary"></i>Kelompok 4</span>
                    </div>
                    <span class="badge bg-success fs-6 px-3 py-2 rounded-pill shadow-sm">95 Poin</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 py-3">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-secondary text-light me-3 fs-5 rounded-circle" style="width: 40px; height: 40px;">🥈</span>
                        <span class="fs-5 fw-semibold"><i class="bi bi-person-fill me-2 text-secondary"></i>Kelompok 5</span>
                    </div>
                    <span class="badge bg-success fs-6 px-3 py-2 rounded-pill shadow-sm">92 Poin</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 py-3">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-orange text-light me-3 fs-5 rounded-circle" style="width: 40px; height: 40px; background-color: #f0ad4e;">🥉</span>
                        <span class="fs-5 fw-semibold"><i class="bi bi-person-fill me-2 text-secondary"></i>Kelompok 1</span>
                    </div>
                    <span class="badge bg-success fs-6 px-3 py-2 rounded-pill shadow-sm">90 Poin</span>
                </li>
            </ul>
        </div>
    </div>
</div>

        <!-- Tab Feed Pembelajaran -->
        <div class="tab-pane fade" id="informasi" role="tabpanel" aria-labelledby="informasi-tab">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Feed Card 1 -->
                    <div class="card shadow-sm mb-4">
                        <div class="ratio" style="--bs-aspect-ratio: 100%;">
                            <img src="{{ asset('img/konten1.png') }}" class="card-img-top object-fit-cover" alt="Postingan" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Kode program</h5>
                            <p class="card-text">Aduhh, otw bikin web nih 😄</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-danger btn-sm">❤️ 20 Suka</button>
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#feedComment1">💬 Komentar</button>
                            </div>
                            <!-- Komentar Collapse (Contoh untuk Feed Card 1) -->
                            <div class="collapse mt-2" id="feedComment1">
                                <div class="border rounded p-2">
                                    <p><strong>Rina:</strong> Keren banget tampilannya!</p>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                                        <button class="btn btn-sm btn-success" type="button">
                                            <i class="bi bi-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Feed Card 2 -->
                    <div class="card shadow-sm mb-4">
                        <div class="ratio" style="--bs-aspect-ratio: 100%;">
                            <img src="{{ asset('img/konten2.jpg') }}" class="card-img-top object-fit-cover" alt="Postingan" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Masih belajar hehe</h5>
                            <p class="card-text">tampilan media pembelajaran nih 🔥</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-danger btn-sm">❤️ 12 Suka</button>
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#feedComment2">💬 Komentar</button>
                            </div>
                            <!-- Komentar Collapse (Contoh untuk Feed Card 1) -->
                            <div class="collapse mt-2" id="feedComment2">
                                <div class="border rounded p-2">
                                    <p><strong>Rina:</strong> Keren banget tampilannya!</p>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                                        <button class="btn btn-sm btn-success" type="button">
                                            <i class="bi bi-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Materi -->
<div class="modal fade" id="modalTambahMateri" tabindex="-1" aria-labelledby="modalTambahMateriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahMateriLabel">Tambah Materi Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Materi</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Materi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file_materi" class="form-label">Unggah Materi (PDF)</label>
                        <input type="file" class="form-control" id="file_materi" name="file_materi" accept=".pdf" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Materi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Buat Kuis -->
<div class="modal fade" id="modalBuatKuis" tabindex="-1" aria-labelledby="modalBuatKuisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBuatKuisLabel">Buat Kuis Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul_kuis" class="form-label">Judul Kuis</label>
                        <input type="text" class="form-control" id="judul_kuis" name="judul_kuis" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_kuis" class="form-label">Deskripsi Kuis</label>
                        <textarea class="form-control" id="deskripsi_kuis" name="deskripsi_kuis" rows="5" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning text-white">Buat Kuis</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="tab-pane fade show active" id="tambah-materi" role="tabpanel" aria-labelledby="tambah-materi-tab">
    <div class="text-center mt-4 mb-4">
        <button class="btn btn-primary px-4 py-2 rounded-pill shadow-sm fw-semibold transition-all" data-bs-toggle="modal" data-bs-target="#modalTambahMateri">
            <i class="bi bi-plus-circle me-2"></i>Tambah Materi Baru
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materi as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->judul }}</td>
                    <td>{{ $m->deskripsi }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $m->file_materi) }}" target="_blank" class="btn btn-sm btn-warning">
                            Lihat Materi
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#modalHapusMateri{{ $m->id }}">
                            <i class="bi bi-trash"></i> Hapus
                        </button>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapusMateri{{ $m->id }}" tabindex="-1" aria-labelledby="modalHapusMateriLabel{{ $m->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalHapusMateriLabel{{ $m->id }}">Konfirmasi Penghapusan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus materi <strong>{{ $m->judul }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ route('materi.destroy', ['idkelas' => $kelas->id, 'id' => $m->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<style>
    .modal-header {
        background-color: #f8f9fa;
    }

    .btn-warning {
        background-color: #f9a825;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #f57f17;
    }

     .table th, .table td {
        vertical-align: middle;
        font-size: 14px;
        padding: 12px 15px;
    }

    .table th {
        background-color: #343a40;
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .btn-primary, .btn-warning, .btn-danger {
        font-size: 14px;
        border-radius: 30px;
        padding: 8px 16px;
    }

    .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .modal-content {
        border-radius: 10px;
    }

    .modal-footer button {
        padding: 8px 16px;
        border-radius: 30px;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    .btn-sm {
        font-size: 13px;
    }

    .table-responsive {
        margin-top: 20px;
    }
</style>
@endsection
