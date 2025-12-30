<div class="container py-4">
    <h3 class="fw-bold text-center mb-4 text-primary">
        🎓 Materi Pembelajaran Adaptif
    </h3>

    <div class="row g-4">
        {{-- CARD --}}
        @include('kinestetik.tabsmateri.materi1')
        @include('kinestetik.tabsmateri.materi2')
        @include('kinestetik.tabsmateri.materi3')
        @include('kinestetik.tabsmateri.materi4')
        @include('kinestetik.tabsmateri.materi5')
    </div>
</div>

{{-- MODAL --}}
@include('kinestetik.tabsmateri.modal.materi1-modal')
@include('kinestetik.tabsmateri.modal.materi2-modal')
@include('kinestetik.tabsmateri.modal.materi3-modal')
@include('kinestetik.tabsmateri.modal.materi4-modal')
@include('kinestetik.tabsmateri.modal.materi5-modal')
@include('kinestetik.tabsmateri.modal.materi6-modal')
@include('kinestetik.tabsmateri.modal.materi7-modal')
@include('kinestetik.tabsmateri.modal.materi8-modal')
@include('kinestetik.tabsmateri.modal.materi9-modal')