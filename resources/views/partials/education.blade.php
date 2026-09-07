<section id="education">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <p class="section-label">Latar Belakang</p>
            <h2 class="section-heading">Pendidikan & Pengalaman</h2>
            <div class="divider mx-auto"></div>
        </div>
        
        <div class="row gy-5">
            <!-- Education -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:44px; height:44px; border-radius:12px; background:var(--accent-dim); border:1px solid rgba(34,211,238,0.25); display:flex; align-items:center; justify-content:center; color:var(--accent); font-size:1.3rem; flex-shrink:0;">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3 class="fw-700 mb-0" style="font-size:1.1rem; font-weight:700; color:var(--text-primary); letter-spacing:0.5px;">Pendidikan</h3>
                </div>

                @foreach($education as $edu)
                <div class="edu-card mb-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                        <h5 class="fw-bold mb-0" style="color:var(--text-primary); font-size:1rem;">{{ $edu['degree'] }}</h5>
                        <span class="edu-year-badge"><i class="bi bi-calendar3"></i> {{ $edu['year'] }}</span>
                    </div>
                    <p class="mb-1" style="color:var(--accent); font-size:0.88rem; font-weight:600;">{{ $edu['major'] }}</p>
                    <p class="mb-0" style="color:var(--text-secondary); font-size:0.85rem;"><i class="bi bi-building me-2"></i>{{ $edu['institution'] }}</p>
                </div>
                @endforeach
            </div>
            
            <!-- Certifications -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:44px; height:44px; border-radius:12px; background:rgba(34,197,94,0.1); border:1px solid rgba(34,197,94,0.25); display:flex; align-items:center; justify-content:center; color:var(--success); font-size:1.3rem; flex-shrink:0;">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h3 class="mb-0" style="font-size:1.1rem; font-weight:700; color:var(--text-primary); letter-spacing:0.5px;">Sertifikasi</h3>
                </div>
                
                @foreach($certifications as $cert)
                <div class="cert-card mb-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3">
                        <h5 class="fw-bold mb-0" style="color:var(--text-primary); font-size:1rem;">{{ $cert['title'] }}</h5>
                        <span class="cert-badge"><i class="bi bi-check-circle-fill"></i> {{ $cert['status'] }}</span>
                    </div>
                    <p class="mb-1" style="color:var(--text-secondary); font-size:0.85rem;"><i class="bi bi-shield-check me-2" style="color:var(--success);"></i>{{ $cert['issuer'] }}</p>
                    <p class="mb-1" style="color:var(--text-secondary); font-size:0.82rem; padding-left:1.4rem;">{{ $cert['institution'] }}</p>
                    @if(!empty($cert['body']))
                    <p class="mb-0" style="color:var(--text-secondary); font-size:0.8rem; padding-left:1.4rem;"><i class="bi bi-patch-check me-1" style="color:var(--accent);"></i>{{ $cert['body'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>

            <!-- Training / Experience -->
            <div class="col-lg-12" data-aos="fade-up">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="width:44px; height:44px; border-radius:12px; background:rgba(129,140,248,0.1); border:1px solid rgba(129,140,248,0.25); display:flex; align-items:center; justify-content:center; color:#818CF8; font-size:1.3rem; flex-shrink:0;">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <h3 class="mb-0" style="font-size:1.1rem; font-weight:700; color:var(--text-primary); letter-spacing:0.5px;">Pengalaman Kerja Praktik</h3>
                </div>
                
                <div class="row gy-3">
                    @foreach($training as $train)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="intern-card h-100">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                                <h5 class="fw-bold mb-0" style="color:var(--text-primary); font-size:0.97rem;">{{ $train['title'] ?? $train['degree'] ?? '' }}</h5>
                                <span class="edu-year-badge" style="background:rgba(129,140,248,0.1); border-color:rgba(129,140,248,0.2); color:#818CF8;">
                                    <i class="bi bi-calendar3"></i> {{ $train['status'] ?? $train['year'] ?? '' }}
                                </span>
                            </div>
                            <p class="mb-1" style="color:#818CF8; font-size:0.85rem; font-weight:600;">{{ $train['issuer'] ?? $train['major'] ?? '' }}</p>
                            <p class="mb-0" style="color:var(--text-secondary); font-size:0.83rem;"><i class="bi bi-building me-2"></i>{{ $train['institution'] ?? '' }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
