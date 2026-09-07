<section id="hero" class="d-flex align-items-center min-vh-100 position-relative pt-5 section-bg-alt">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3 fw-medium" data-aos="fade-up" data-aos-delay="100">
                    Selamat Datang
                </div>
                <h1 class="display-4 fw-bolder mb-2" data-aos="fade-up" data-aos-delay="200">Halo, saya <span class="text-primary">Yosef Bernardus Janson Subur</span>, S.Kom.</h1>
                <h2 class="fs-3 text-secondary mb-4" style="min-height: 40px;" data-aos="fade-up" data-aos-delay="300">
                    <span id="typed-text"></span>
                </h2>
                <p class="lead mb-4 text-muted" style="max-width: 90%;" data-aos="fade-up" data-aos-delay="400">
                    Lulusan Sistem Informasi yang fokus pada pengembangan aplikasi web. Memiliki kompetensi resmi dari BNSP serta pengalaman nyata mulai dari perancangan UI/UX di Figma, pengembangan Front-End, hingga implementasi Full-Stack menggunakan Laravel.
                </p>
                <div class="d-flex gap-3 flex-wrap mt-2" data-aos="fade-up" data-aos-delay="500">
                    <a href="#portfolio" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm hover-lift">
                        <i class="bi bi-briefcase me-2"></i> Lihat Proyek
                    </a>
                    <a href="https://www.linkedin.com/in/yosef-bernardus-janson-subur/" target="_blank" class="btn btn-outline-primary btn-lg rounded-pill px-4 shadow-sm hover-lift">
                        <i class="bi bi-linkedin me-2"></i> LinkedIn
                    </a>
                    <a href="{{ asset('cv/cv.pdf') }}" class="btn btn-dark btn-lg rounded-pill px-4 shadow-sm hover-lift" download>
                        <i class="bi bi-download me-2"></i> Download CV
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1200">
                <div class="profile-image-container position-relative d-inline-block">
                    <div class="blob-bg position-absolute top-50 start-50 translate-middle"></div>
                    <img src="{{ asset('images/profile/profile.jpeg') }}" alt="Profile Picture" class="img-fluid profile-img position-relative z-1 floating-anim" loading="lazy" onerror="this.src='https://via.placeholder.com/400x400?text=Profile'">
                </div>
            </div>
        </div>
    </div>
</section>
