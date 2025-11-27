@extends('layout.masterAuditori')
@section('title', 'CP dan TP')
@section('menuCPdanTP', 'active')

@section('content')
<!-- CP & TP Accordion -->
<div class="container mt-4">
    <h3 class="mb-4 text-primary fw-bold">
        <i class="bi bi-journal-check"></i> Capaian & Tujuan Pembelajaran
    </h3>

    <div class="accordion" id="cpTpAccordion">
        <!-- CP -->
        <div class="accordion-item border border-primary rounded mb-3">
            <h2 class="accordion-header" id="headingCp">
                <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCp" aria-expanded="true" aria-controls="collapseCp">
                    <i class="bi bi-flag-fill me-2 text-success"></i> Capaian Pembelajaran (CP)
                </button>
            </h2>
            <div id="collapseCp" class="accordion-collapse collapse show" aria-labelledby="headingCp" data-bs-parent="#cpTpAccordion">
                <div class="accordion-body">
                    <p class="text-justify">
                        Pada akhir fase <span class="badge bg-secondary">F</span>, peserta didik mampu memahami konsep
                        dan menerapkan perintah <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>,
                        bahasa pemrograman server-side, serta implementasi framework pada pembuatan web statis dan dinamis.
                        Peserta didik juga mampu mendokumentasikan serta mempresentasikan web yang telah dikembangkan sesuai konteks.
                    </p>
                </div>
            </div>
        </div>

        <!-- TP -->
        <div class="accordion-item border border-primary rounded">
            <h2 class="accordion-header" id="headingTp">
                <button class="accordion-button collapsed text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTp" aria-expanded="false" aria-controls="collapseTp">
                    <i class="bi bi-bullseye me-2 text-danger"></i> Tujuan Pembelajaran (TP)
                </button>
            </h2>
            <div id="collapseTp" class="accordion-collapse collapse" aria-labelledby="headingTp" data-bs-parent="#cpTpAccordion">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-chevron-right text-success me-2"></i> Menjelaskan penerapan konsep <strong>HTML (Hypertext Markup Language)</strong>
                        </li>
                        <!-- Tambahkan lebih banyak item jika ada -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
