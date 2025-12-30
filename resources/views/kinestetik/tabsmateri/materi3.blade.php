<div class="col-md-4 col-sm-6" data-aos="fade-up">
    <div class="card h-100 border-0 rounded-4 shadow-sm card-materi">

        <!-- Thumbnail -->
        <div class="position-relative">
            <img
                src="{{ url('img/multimedia.png') }}"
                class="card-img-top img-landscape rounded-top-4"
                alt="Elemen Multimedia"
            >

            <!-- Badge -->
            <span class="badge badge-materi position-absolute top-0 start-0 m-3">
                KINESTETIK
            </span>
        </div>

        <!-- Body -->
        <div class="card-body d-flex flex-column p-4">
            <h5 class="card-title fw-bold text-primary mb-2">
                Integrasi Elemen Multimedia
            </h5>

            <p class="card-text text-secondary small flex-grow-1">
                Integrasi elemen multimedia seperti video, audio, dan gambar dalam HTML
            </p>

            <div class="dropdown dropend w-100">
                <button class="btn btn-primary dropdown-toggle w-100 py-2"
                    data-bs-toggle="dropdown">
                    📘 Mulai Belajar
                </button>

                <ul class="dropdown-menu dropdown-materi shadow-lg border-0 p-2">
                    <li>
                        <button class="dropdown-item dropdown-materi-item fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#modalMateri5"
                                data-title="Integrasi Video">
                                <i class="bi bi-camera-video text-primary me-2"></i> Integrasi Video
                        </button>
                    </li>

                    <li>
                        <button class="dropdown-item dropdown-materi-item fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#modalMateri6"
                                data-title="Integrasi Audio">
                                <i class="bi bi-music-note text-primary me-2"></i>Integrasi Audio
                        </button>
                    </li>

                    <li>
                        <button class="dropdown-item dropdown-materi-item fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#modalMateri7"
                                data-title="Integrasi Gambar">
                                <i class="bi bi-file-image text-primary me-2"></i>Integrasi Gambar
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    /* Card Materi */
.card-materi {
    transition: all 0.3s ease;
}

.card-materi:hover {
    z-index: 10;
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(13,110,253,.25);
}

/* Badge Materi */
.badge-materi {
    background: linear-gradient(90deg, #0b5ed7, #0d6efd);
    color: #fff;
    font-size: 12px;
    padding: 6px 12px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(13,110,253,.3);
}

/* Image Landscape */
.img-landscape {
    aspect-ratio: 16 / 9;
    object-fit: cover;
}

/* Dropdown Materi */
.dropdown-materi {
    min-width: 260px;
    border-radius: 14px;
    background: #ffffff;
    animation: fadeSlide .2s ease;
}

/* Dropdown Item */
.dropdown-materi-item {
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 14px;
    color: #212529;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all .25s ease;
}

/* Hover Effect */
.dropdown-materi-item:hover {
    background: linear-gradient(90deg, rgba(13,110,253,.1), rgba(13,110,253,.05));
    color: #0d6efd;
    transform: translateX(4px);
}

/* Divider */
.dropdown-divider {
    margin: 6px 0;
}

.dropdown-materi-item::after {
    content: "›";
    margin-left: auto;
    opacity: .4;
    transition: .25s;
}

.dropdown-materi-item:hover::after {
    opacity: 1;
    transform: translateX(4px);
}

/* Animation */
@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateY(6px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
