<h3 class="mb-4 text-center text-primary fw-bold">
    Tugas Siswa
</h3>

<table class="table table-bordered table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Nama Siswa</th>
            <th>Lihat Tugas</th>
            <th>Status / Beri Nilai</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($tugas as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td class="fw-bold">
                {{ $t->pengguna->nama ?? 'Tidak ditemukan' }}
            </td>

            <td>
                @if ($t->pdf_file)
                    <a href="{{ url('storage/' . $t->pdf_file) }}"
                       target="_blank"
                       class="btn btn-sm btn-info">
                        Lihat PDF
                    </a>
                @else
                    <span class="text-danger">Belum upload</span>
                @endif
            </td>

            <td>
                @if ($t->nilai === null)
                    <!-- BELUM DINILAI -->
                    <span class="badge bg-warning text-dark">Belum Dinilai</span>
                    <br>
                    <button class="btn btn-sm btn-primary mt-1"
                            data-bs-toggle="modal"
                            data-bs-target="#modalNilai_{{ $t->id }}">
                        Beri Nilai
                    </button>
                @else
                    <!-- SUDAH DINILAI -->
                    <span class="badge bg-primary">Sudah Dinilai ({{ $t->nilai }})</span>
                    <br>
                    <button class="btn btn-sm btn-outline-primary mt-1"
                            data-bs-toggle="modal"
                            data-bs-target="#modalNilai_{{ $t->id }}">
                        Edit Nilai
                    </button>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center text-muted">
                Belum ada siswa yang mengumpulkan tugas.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>


<!-- ===========================
     SEMUA MODAL DITARUH DI LUAR TABLE
=========================== -->
@foreach ($tugas as $t)
<div class="modal fade" id="modalNilai_{{ $t->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('guru.tugas.nilai', $t->id) }}"
              method="POST"
              class="modal-content">
            @csrf

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    @if ($t->nilai === null)
                        Beri Nilai - {{ $t->pengguna->nama ?? 'Tidak ditemukan' }}
                    @else
                        Edit Nilai - {{ $t->pengguna->nama ?? 'Tidak ditemukan' }}
                    @endif
                </h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <label class="form-label fw-bold">Nilai</label>
                <input type="number"
                       name="nilai"
                       class="form-control"
                       value="{{ $t->nilai ?? '' }}"
                       min="0"
                       max="100"
                       required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Batal
                </button>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </div>

        </form>
    </div>
</div>
@endforeach
