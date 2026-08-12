<section id="skills" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold section-title">Skills & Tools</h2>
            <div class="divider mx-auto bg-primary"></div>
        </div>
        
        <div class="row gy-4">
            @foreach($skills as $category => $items)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4 text-center border-bottom pb-3">{{ $category }}</h5>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            @foreach($items as $item)
                            <div class="text-center skill-item">
                                <div class="skill-icon-wrapper rounded-circle shadow-sm d-flex align-items-center justify-content-center mb-2 mx-auto bg-body" style="width: 60px; height: 60px; transition: all 0.3s ease;">
                                    <i class="bi {{ $item['icon'] }} fs-3" style="color: {{ $item['color'] ?? 'var(--bs-primary)' }}"></i>
                                </div>
                                <span class="small fw-medium text-muted">{{ $item['name'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
