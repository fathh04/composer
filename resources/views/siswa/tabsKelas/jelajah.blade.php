<div class="container py-4">
    <h3 class="fw-bold text-center mb-4 text-primary">
        🎓 Materi Pembelajaran Adaptif
    </h3>

    <div class="row g-4">
        {{-- CARD --}}
        @include('siswa.tabsmateri.materi1')
    </div>
</div>

{{-- MODAL --}}
@include('siswa.tabsmateri.modal.materi1-modal')
@include('siswa.tabsmateri.modal.materi2-modal')
@include('siswa.tabsmateri.modal.materi3-modal')
