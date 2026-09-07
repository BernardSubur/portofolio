<section id="skills">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <p class="section-label">Kemampuan Teknis</p>
            <h2 class="section-heading">Skills & Tools</h2>
            <div class="divider mx-auto"></div>
        </div>
        
        <div class="row gy-4 justify-content-center">
            @foreach($skills as $category => $items)
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="skill-category-card">
                    <p class="skill-category-title">{{ $category }}</p>
                    <div class="d-flex flex-wrap">
                        @foreach($items as $item)
                        <div class="skill-chip">
                            <i class="bi {{ $item['icon'] }}" style="color: {{ $item['color'] ?? 'var(--accent)' }};"></i>
                            {{ $item['name'] }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
