<section id="portfolio" class="py-5 section-bg-alt">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold section-title">Portofolio</h2>
            <div class="divider mx-auto bg-primary"></div>
        </div>
        
        <div class="row gy-4">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift portfolio-card">
                    <div class="position-relative bg-light {{ isset($project['image']) ? '' : 'pt-4 px-4 text-center d-flex align-items-end justify-content-center' }}" style="height: 200px; overflow: hidden;">
                        @if(isset($project['image']))
                            <img src="{{ Str::startsWith($project['image'], 'http') ? $project['image'] : asset($project['image']) }}" alt="{{ $project['name'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <i class="bi bi-browser-chrome text-primary opacity-25" style="font-size: 8rem; margin-bottom: -20px;"></i>
                        @endif
                        <div class="position-absolute top-0 start-0 w-100 p-3 d-flex justify-content-between">
                            <span class="badge {{ $project['status'] == 'Live' ? 'bg-success' : 'bg-primary' }} rounded-pill">{{ $project['status'] }}</span>
                            <span class="badge bg-dark rounded-pill">{{ $project['role'] }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold mb-3">{{ $project['name'] }}</h5>
                        
                        @if(isset($project['tech']) || isset($project['tools']))
                        <div class="mb-3">
                            @if(isset($project['tech']))
                                @foreach($project['tech'] as $tech)
                                    <span class="badge bg-secondary-subtle text-secondary border rounded-pill me-1 mb-1">{{ $tech }}</span>
                                @endforeach
                            @endif
                            @if(isset($project['tools']))
                                @foreach($project['tools'] as $tool)
                                    <span class="badge bg-secondary-subtle text-secondary border rounded-pill me-1 mb-1">{{ $tool }}</span>
                                @endforeach
                            @endif
                        </div>
                        @endif
                        
                        @if(isset($project['description']))
                            @if(is_array($project['description']))
                            <ul class="text-muted small ps-3 mb-4 flex-grow-1">
                                @foreach($project['description'] as $desc)
                                <li>{{ $desc }}</li>
                                @endforeach
                            </ul>
                            @else
                            <p class="text-muted small mb-4 flex-grow-1">{{ $project['description'] }}</p>
                            @endif
                        @endif
                    </div>
                    <div class="card-footer bg-transparent border-0 p-4 pt-0 d-flex gap-2">
                        @if(isset($project['demo_url']))
                        <a href="{{ $project['demo_url'] }}" class="btn btn-primary btn-sm flex-grow-1 rounded-pill" target="_blank">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Live
                        </a>
                        @endif
                        @if(isset($project['prototype_url']))
                        <a href="{{ $project['prototype_url'] }}" class="btn btn-primary btn-sm flex-grow-1 rounded-pill" target="_blank">
                            <i class="bi bi-vector-pen me-1"></i> Prototype
                        </a>
                        @endif
                        @if(isset($project['github_url']))
                        <a href="{{ $project['github_url'] }}" class="btn btn-dark btn-sm flex-grow-1 rounded-pill dark-btn" target="_blank">
                            <i class="bi bi-github me-1"></i> GitHub
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
