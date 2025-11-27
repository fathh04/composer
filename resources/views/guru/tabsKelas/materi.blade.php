<div class="tab-pane fade show active" id="tambah-materi" role="tabpanel">

    <!-- Tombol Tambah Materi -->
    <div class="mt-3 mb-4">
        <button class="btn btn-primary px-4 py-2 rounded-pill shadow-sm fw-semibold"
                data-bs-toggle="modal" data-bs-target="#modalTambahMateri">
            <i class="bi bi-plus-circle me-2"></i> Tambah Materi Baru
        </button>
    </div>

    <!-- Tabel Materi -->
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gaya Belajar</th>
                            <th>File / Konten</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($materi as $m)
                        <tr>
                            <td class="fw-semibold">{{ $loop->iteration }}</td>

                            <td class="fw-bold text-primary">{{ $m->judul }}</td>

                            <td style="max-width: 300px;">{{ $m->deskripsi }}</td>

                            <td class="fw-semibold text-capitalize">
                                {{ $m->gaya_belajar }}
                            </td>

                            <td>
                                @if ($m->gaya_belajar == 'kinestetik')
                                    <span class="text-muted fst-italic">Tidak ada file (materi teks)</span>
                                @else
                                    <a href="{{ asset('storage/' . $m->file_materi) }}" target="_blank"
                                       class="btn btn-sm btn-outline-primary rounded-pill">
                                        <i class="bi bi-file-earmark"></i> Lihat
                                    </a>
                                @endif
                            </td>

                            <td class="text-center">
                                <!-- Tombol Hapus -->
                                <button type="button"
                                        class="btn btn-sm btn-outline-danger rounded-pill"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalHapusMateri{{ $m->id }}">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="modalHapusMateri{{ $m->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0 shadow">

                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title">
                                                    <i class="bi bi-exclamation-triangle me-2"></i> Konfirmasi Penghapusan
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus materi
                                                <strong class="text-primary">{{ $m->judul }}</strong>?
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary rounded-pill"
                                                        data-bs-dismiss="modal">Batal</button>

                                                <form action="{{ route('materi.destroy', ['idkelas' => $kelas->id, 'id' => $m->id]) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger rounded-pill px-3">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>


<!-- Modal Tambah Materi -->
<div class="modal fade" id="modalTambahMateri" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Materi Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-primary">Judul Materi</label>
                        <input type="text" class="form-control rounded-3" name="judul" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-primary">Deskripsi</label>
                        <textarea class="form-control rounded-3" name="deskripsi" rows="4" required></textarea>
                    </div>

                    <!-- GAYA BELAJAR -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-primary">Gaya Belajar</label>
                        <select name="gaya_belajar" id="gaya_belajar" class="form-control rounded-3" required>
                            <option value="">-- Pilih Gaya Belajar --</option>
                            <option value="visual">Visual (Video/Gambar)</option>
                            <option value="auditori">Auditori (Audio/MP3)</option>
                            <option value="kinestetik">Kinestetik (Teks)</option>
                        </select>
                    </div>

                    <!-- UPLOAD FILE (Dinamis) -->
                    <div class="mb-3" id="uploadFileWrapper">
                        <label class="form-label fw-semibold text-primary">Upload Materi</label>
                        <input type="file" class="form-control rounded-3" name="file_materi"
                               id="file_materi" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill"
                            data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                        Simpan Materi
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: #eef4ff !important;
    }

    .modal-content {
        border-radius: 14px;
    }
</style>

<!-- SCRIPT: Ubah input file berdasarkan gaya belajar -->
<script>
document.getElementById('gaya_belajar').addEventListener('change', function () {
    let selected = this.value;
    let input = document.getElementById('file_materi');

    if (selected === 'visual') {
        input.required = true;
        input.accept = ".mp4, .jpg, .jpeg, .png";
        input.style.display = "block";
    }
    else if (selected === 'auditori') {
        input.required = true;
        input.accept = ".mp3, .wav";
        input.style.display = "block";
    }
    else if (selected === 'kinestetik') {
        input.required = false;
        input.value = "";
        input.style.display = "none";
    }
});
</script>
