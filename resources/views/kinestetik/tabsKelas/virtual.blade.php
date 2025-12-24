@php
    $materi = $materi ?? collect();
@endphp

{{-- === MATERI DARI PENGAJAR === --}}
<div class="d-flex align-items-center justify-content-between mb-2">
    <h4 class="fw-bold text-primary d-flex align-items-center gap-2">
        <i class="bi bi-journal-text"></i>
        Modul
    </h4>
</div>

<hr class="grad-line">

<div class="row g-4 mt-3">

@foreach($materi as $m)
@php
    $tugasSaya = \App\Models\TugasGuru::where('pengguna_id', Auth::id())
                ->where('materi_id', $m->id)
                ->first();
@endphp

<div class="col-md-4">

    <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">

        {{-- Thumbnail --}}
        <div class="card-img-top position-relative d-flex justify-content-center align-items-center bg-light-primary" style="height:160px;">

            <i class="bi bi-file-earmark-pdf-fill text-danger fs-1"></i>

            {{-- BADGE NILAI --}}
            @if($tugasSaya)
                @if($tugasSaya->nilai !== null)
                    <span class="badge position-absolute top-0 end-0 m-2 bg-success">
                        ⭐ {{ $tugasSaya->nilai }}
                    </span>
                @else
                    <span class="badge position-absolute top-0 end-0 m-2 bg-secondary">
                        Belum dinilai
                    </span>
                @endif
            @endif

        </div>

        {{-- Pembatas Thumbnail → Body --}}
        <hr class="divider-line">

        {{-- Body --}}
        <div class="card-body py-2">
            <h5 class="fw-bold text-primary">{{ $m->judul }}</h5>
            <p class="text-muted small">{{ $m->deskripsi }}</p>
        </div>

        {{-- Pembatas Body → Footer --}}
        <hr class="divider-line">

        {{-- Footer --}}
        <div class="card-footer bg-white border-0 pb-3 px-3">

            <div class="row g-2">

                {{-- Tombol Lihat Materi --}}
                <div class="col-6">
                    @if($m->file_materi)
                        <a href="{{ url('storage/'.$m->file_materi) }}"
                            target="_blank"
                            class="btn btn-primary w-100 rounded-pill fw-semibold shadow-sm">
                            <i class="bi bi-book"></i> Materi
                        </a>
                    @else
                        <button class="btn btn-secondary w-100 rounded-pill" disabled>
                            Tidak Ada
                        </button>
                    @endif
                </div>

                {{-- Tombol Upload --}}
                <div class="col-6">
                    <button class="btn btn-primary w-100 rounded-pill fw-semibold shadow-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#uploadTugasModal_{{ $m->id }}">
                        <i class="bi bi-upload"></i> Upload
                    </button>
                </div>

                {{-- Tugas Saya --}}
                @if($tugasSaya)
                <div class="col-12">
                    <a href="{{ url('storage/' . $tugasSaya->pdf_file) }}"
                        target="_blank"
                        class="btn btn-outline-primary w-100 rounded-pill fw-semibold shadow-sm mt-1">
                        <i class="bi bi-eye"></i> Tugas Saya
                    </a>
                </div>
                @endif

            </div>

        </div>

    </div>
</div>


{{-- === MODAL UPLOAD TUGAS === --}}
<div class="modal fade" id="uploadTugasModal_{{ $m->id }}" tabindex="-1">
  <div class="modal-dialog">
    <form action="{{ route('tugas.upload', $m->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
      @csrf

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Upload Tugas: {{ $m->judul }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <label class="form-label fw-semibold">Pilih File Tugas (PDF):</label>
        <input type="file" name="file_tugas" accept="application/pdf" class="form-control" required>

        <input type="hidden" name="materi_id" value="{{ $m->id }}">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary rounded-pill">Upload</button>
      </div>

    </form>
  </div>
</div>

@endforeach

</div>


{{-- CUSTOM STYLE --}}
<style>
    .grad-line {
        height: 3px;
        border: none;
        background: linear-gradient(to right, #0d6efd, #6ea8fe);
        border-radius: 10px;
        margin-top: -5px;
        margin-bottom: 20px;
    }

    .bg-light-primary {
        background: #e3efff !important;
    }

    .divider-line {
        height: 1px;
        border: none;
        background: #e5e7eb;
        margin: 0 15px;
    }

    .card {
        transition: 0.3s ease;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
</style>
