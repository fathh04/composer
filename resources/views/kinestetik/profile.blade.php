@extends('layout.masterKinestetik')
@section('title', 'Profil - HTML5VIRTUAL')
@section('menuProfile', 'active')

@section('content')
<div class="container py-5 profile-wrapper">

    <!-- HEADER -->
    <div class="text-center mb-5">
        <img src="https://cdn-icons-png.flaticon.com/512/817/817776.png"
             alt="Profile"
             class="profile-avatar mb-3">

        <h2 class="fw-bold text-primary mb-1">
            {{ session('user_name') }}
        </h2>

        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">
            {{ ucfirst($user->role) }}
        </span>
    </div>

    <!-- INFO SECTION -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="profile-section">
                <h6 class="section-title">Informasi Akun</h6>

                <div class="info-row">
                    <span>Nama Pengguna</span>
                    <strong>{{ session('user_name') }}</strong>
                </div>

                <div class="info-row">
                    <span>Email</span>
                    <strong>{{ $user->email }}</strong>
                </div>

                <div class="info-row">
                    <span>Peran</span>
                    <strong class="text-capitalize">{{ $user->role }}</strong>
                </div>

                <div class="info-row">
                    <span>Gaya Belajar</span>
                    <strong class="text-capitalize">{{ $user->gaya_belajar }}</strong>
                </div>
            </div>

            <div class="mt-4 text-left">
                <button class="btn btn-outline-danger rounded-pill px-3"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteAccountModal">
                    <i class="bi bi-trash"></i> Hapus Akun
                </button>
            </div>

        </div>
    </div>

</div>

<!-- MODAL HAPUS AKUN -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">

            <div class="modal-header border-0">
                <h5 class="modal-title text-danger fw-bold">
                    <i class="bi bi-exclamation-triangle-fill"></i> Konfirmasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center px-4">
                <p class="mb-2 fw-semibold">
                    Yakin ingin menghapus akun ini?
                </p>
                <p class="text-muted small">
                    Semua data akan <strong>terhapus permanen</strong> dan tidak dapat dikembalikan.
                </p>
            </div>

            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-light rounded-pill px-4"
                        data-bs-dismiss="modal">
                    Batal
                </button>

                <form action="{{ route('account.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="btn btn-danger rounded-pill px-4">
                        Ya, Hapus Akun
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
.profile-wrapper {
    min-height: 70vh;
}

.profile-avatar {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #e7f0ff;
    background: #fff;
}

.profile-section {
    border-top: 2px dashed #e9ecef;
    padding-top: 1.5rem;
}

.section-title {
    font-size: 0.8rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #6c757d;
    margin-bottom: 1.5rem;
}

.info-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 0;
    border-bottom: 1px solid #f1f3f5;
    font-size: 0.95rem;
}

.info-row span {
    color: #6c757d;
}

.info-row strong {
    color: #212529;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 576px) {
    .info-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
}
</style>
@endsection
