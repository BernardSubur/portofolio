<section id="education" class="py-5 section-bg-alt">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold section-title">Pendidikan & Sertifikasi</h2>
            <div class="divider mx-auto bg-primary"></div>
        </div>
        
        <div class="row gy-5">
            <!-- Education -->
            <div class="col-lg-6" data-aos="fade-right">
                <h3 class="d-flex align-items-center mb-4 fw-bold">
                    <i class="bi bi-mortarboard text-primary me-3 fs-2"></i> Pendidikan
                </h3>
                <div class="timeline position-relative ps-4 ms-2 mt-4">
                    @foreach($education as $edu)
                    <div class="timeline-item position-relative mb-4">
                        <div class="timeline-dot position-absolute bg-primary rounded-circle border border-3 border-white shadow-sm"></div>
                        <div class="card border-0 shadow-sm rounded-4 hover-lift">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-1">{{ $edu['degree'] }}</h5>
                                <h6 class="text-primary mb-3">{{ $edu['major'] }}</h6>
                                <p class="text-muted mb-2"><i class="bi bi-building me-2"></i>{{ $edu['institution'] }}</p>
                                <span class="badge bg-light text-dark rounded-pill border px-3 py-2">
                                    <i class="bi bi-calendar3 me-1"></i> {{ $edu['year'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Certifications -->
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="d-flex align-items-center mb-4 fw-bold">
                    <i class="bi bi-award text-primary me-3 fs-2"></i> Sertifikasi
                </h3>
                
                <div class="d-flex flex-column gap-4 mt-4">
                    @foreach($certifications as $cert)
                    <div class="card border-0 shadow-sm rounded-4 hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                                <h5 class="fw-bold mb-0 text-primary">{{ $cert['title'] }}</h5>
                                <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2 border border-success-subtle">
                                    <i class="bi bi-check-circle-fill me-1"></i> {{ $cert['status'] }}
                                </span>
                            </div>
                            <h6 class="fw-semibold mb-2"><i class="bi bi-shield-check me-2 text-muted"></i>{{ $cert['issuer'] }}</h6>
                            <p class="text-muted mb-1 ms-4">{{ $cert['institution'] }}</p>
                            @if(!empty($cert['body']))
                            <p class="text-muted mb-0 ms-4 small"><i class="bi bi-patch-check me-1 text-primary"></i>{{ $cert['body'] }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Training -->
            <div class="col-lg-12" data-aos="fade-up">
                <h3 class="d-flex align-items-center mb-4 fw-bold">
                    <i class="bi bi-briefcase text-primary me-3 fs-2"></i> Pengalaman
                </h3>
                
                <div class="row">
                    @foreach($training as $train)
                    <div class="col-lg-6 mb-4">
                        <div class="timeline position-relative ps-4 ms-2 mt-2 h-100">
                            <div class="timeline-item position-relative h-100">
                                <div class="timeline-dot position-absolute bg-primary rounded-circle border border-3 border-white shadow-sm"></div>
                                <div class="card border-0 shadow-sm rounded-4 hover-lift h-100">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-1">{{ $train['title'] ?? $train['degree'] ?? '' }}</h5>
                                        <h6 class="text-primary mb-3">{{ $train['issuer'] ?? $train['major'] ?? '' }}</h6>
                                        <p class="text-muted mb-2"><i class="bi bi-building me-2"></i>{{ $train['institution'] ?? '' }}</p>
                                        <span class="badge bg-light text-dark rounded-pill border px-3 py-2">
                                            <i class="bi bi-calendar3 me-1"></i> {{ $train['status'] ?? $train['year'] ?? '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
