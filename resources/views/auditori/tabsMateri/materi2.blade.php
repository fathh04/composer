<div class="col-md-4 col-sm-6" data-aos="fade-up">
    <div class="card h-100 border-0 rounded-4 shadow-sm card-materi">

        <!-- Thumbnail -->
        <div class="position-relative">
            <img
                src="{{ url('img/visual-tabel.png') }}"
                class="card-img-top img-landscape rounded-top-4"
                alt="Tabel"
            >

            <!-- Badge -->
            <span class="badge badge-materi position-absolute top-0 start-0 m-3">
                AUDITORI
            </span>
        </div>

        <!-- Body -->
        <div class="card-body d-flex flex-column p-4">
            <h5 class="card-title fw-bold text-primary mb-2">
                Tabel
            </h5>

            <p class="card-text text-secondary small flex-grow-1">
                Elemen tabel untuk penyajian data biasa maupun spaning (colspan dan rowspan)
            </p>

            <button class="btn btn-primary w-100 py-2 fw-semibold mt-auto"
                    data-bs-toggle="modal"
                    data-bs-target="#modalMateri4">
                🔊 Dengarkan Materi
            </button>
        </div>
    </div>
</div>

<style>
    /* Card Materi */
.card-materi {
    transition: all 0.3s ease;
}

.card-materi:hover {
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
