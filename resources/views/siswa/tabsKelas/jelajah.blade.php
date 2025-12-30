<div class="container py-4">
    <h3 class="fw-bold text-center mb-4 text-primary">
        🎓 Materi Pembelajaran Adaptif
    </h3>

    <div class="row g-4">
        {{-- CARD --}}
        @include('siswa.tabsmateri.materi1')
        @include('siswa.tabsmateri.materi2')
        @include('siswa.tabsmateri.materi3')
        @include('siswa.tabsmateri.materi4')
        @include('siswa.tabsmateri.materi5')
    </div>
</div>

{{-- MODAL --}}
@include('siswa.tabsmateri.modal.materi1-modal')
@include('siswa.tabsmateri.modal.materi2-modal')
@include('siswa.tabsmateri.modal.materi3-modal')
@include('siswa.tabsmateri.modal.materi4-modal')
@include('siswa.tabsmateri.modal.materi5-modal')
@include('siswa.tabsmateri.modal.materi6-modal')
@include('siswa.tabsmateri.modal.materi7-modal')
@include('siswa.tabsmateri.modal.materi8-modal')
@include('siswa.tabsmateri.modal.materi9-modal')
