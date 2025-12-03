<div id="feedbackSection">
    <!-- ======================= -->
    <!-- UMPAN BALIK BELAJAR     -->
    <!-- ======================= -->

    <div class="card shadow-lg border-0 rounded-4 mt-4 feedback-card" data-aos="fade-up" data-aos-delay="300">
    <div class="card-body p-4">

        <h4 class="fw-bold mb-3 text-gradient-primary" data-aos="zoom-in" data-aos-delay="400">
        📘 Umpan Balik Belajar
        </h4>

        <p class="text-muted">
        Ringkasan performa belajar Anda berdasarkan analisis sistem.
        </p>

        <div class="row g-4 mt-3">

        <!-- Rata-rata Nilai -->
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="500">
            <div class="p-3 rounded-4 bg-primary-soft shadow-sm text-center">
            <h6 class="fw-semibold text-primary">Rata-rata Nilai</h6>
            <p class="fs-2 fw-bold text-dark mb-0">{{ $rataRataNilai }}</p>
            </div>
        </div>

        <!-- Rekomendasi AI -->
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
            <div class="p-3 rounded-4 bg-primary-soft shadow-sm">
            <h6 class="fw-semibold text-primary text-center">Rekomendasi AI</h6>
            <p class="small text-muted mb-0">
                {{ $rekomendasiAI }}
            </p>
            </div>
        </div>

        </div>

    </div>
    </div>

    <!-- ======================= -->
    <!--   HASIL FEEDBACK GURU   -->
    <!-- ======================= -->

    <div class="card shadow-lg border-0 rounded-4 mt-4 feedback-card" data-aos="fade-up" data-aos-delay="400">
    <div class="card-body p-4">

        <h4 class="fw-bold mb-3 text-gradient-primary" data-aos="zoom-in">
        👨‍🏫 Hasil Feedback Guru
        </h4>

        @if($feedbackGuru->count() > 0)
        <ul class="list-group list-group-flush">
            @foreach($feedbackGuru as $fb)
            <li class="list-group-item border-0 px-0 py-3">
                <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h6 class="fw-bold text-primary mb-1">
                    {{ $fb->guru->name ?? 'Guru' }}
                    </h6>
                    <p class="text-muted mb-0">{{ $fb->feedback }}</p>
                </div>

                <span class="badge bg-primary rounded-pill px-3 py-2 shadow-sm">
                    Feedback
                </span>
                </div>
            </li>
            @endforeach
        </ul>
        @else
        <p class="text-muted fst-italic">
            Belum ada feedback dari guru.
        </p>
        @endif

    </div>
    </div>

    <style>
    .feedback-card {
        background: #ffffffdd;
        backdrop-filter: blur(10px);
    }
    </style>
</div>
