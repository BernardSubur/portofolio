<section id="portfolio">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <p class="section-label">Karya Saya</p>
            <h2 class="section-heading">Portofolio</h2>
            <div class="divider mx-auto"></div>
            <p class="section-sub mx-auto mt-3">Proyek yang telah saya kerjakan — dari sistem informasi hingga desain UI/UX.</p>
        </div>
        
        <div class="row gy-4">
            @foreach($projects as $index => $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="portfolio-card-dark">
                    <!-- Thumbnail -->
                    <div class="thumb-wrapper {{ isset($project['gallery']) ? '' : '' }}" 
                         @if(isset($project['gallery'])) onclick="openLightbox({{ $index }}, 0)" @endif>
                        
                        @if(isset($project['gallery']))
                            <img src="{{ asset($project['gallery'][0]['image']) }}" 
                                 alt="{{ $project['gallery'][0]['caption'] }}" 
                                 class="card-thumb">
                            <div class="thumb-overlay">
                                <i class="bi bi-images text-white" style="font-size:2.5rem;"></i>
                            </div>
                            <div class="gallery-count">
                                <i class="bi bi-images"></i> {{ count($project['gallery']) }}
                            </div>
                        @elseif(isset($project['image']))
                            <img src="{{ Str::startsWith($project['image'], 'http') ? $project['image'] : asset($project['image']) }}" 
                                 alt="{{ $project['name'] }}" 
                                 class="card-thumb">
                            <div class="thumb-overlay">
                                <i class="bi bi-eye text-white" style="font-size:2rem;"></i>
                            </div>
                        @else
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="bi bi-browser-chrome" style="font-size:6rem; color:var(--border-color);"></i>
                            </div>
                        @endif

                        <!-- Badges -->
                        <span class="badge-status">{{ $project['status'] }}</span>
                        <span class="badge-role">{{ $project['role'] }}</span>
                    </div>

                    <!-- Card Content -->
                    <div class="card-content">
                        <p class="project-company">{{ $project['company'] }}</p>
                        <h5 class="project-title">{{ $project['name'] }}</h5>

                        @if(isset($project['tech']))
                        <div class="mb-3">
                            @foreach($project['tech'] as $tech)
                                <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif

                        @if(isset($project['description']))
                            @if(is_array($project['description']))
                            <ul class="project-desc ps-3">
                                @foreach($project['description'] as $desc)
                                <li>{{ $desc }}</li>
                                @endforeach
                            </ul>
                            @else
                            <p class="project-desc">{{ $project['description'] }}</p>
                            @endif
                        @endif

                        <!-- Actions -->
                        <div class="project-actions mt-auto">
                            @if(isset($project['gallery']))
                            <button onclick="openLightbox({{ $index }}, 0)" class="btn-project-primary">
                                <i class="bi bi-images"></i> Lihat Gallery
                            </button>
                            @endif
                            @if(isset($project['demo_url']))
                            <a href="{{ $project['demo_url'] }}" class="btn-project-primary" target="_blank">
                                <i class="bi bi-box-arrow-up-right"></i> Live Demo
                            </a>
                            @endif
                            @if(isset($project['prototype_url']))
                            <a href="{{ $project['prototype_url'] }}" class="btn-project-primary" target="_blank">
                                <i class="bi bi-vector-pen"></i> Prototype
                            </a>
                            @endif
                            @if(isset($project['github_url']))
                            <a href="{{ $project['github_url'] }}" class="btn-project-ghost" target="_blank">
                                <i class="bi bi-github"></i> GitHub
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Gallery Lightbox Modal -->
<div class="modal fade" id="galleryLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background:transparent; border:none;">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center position-relative pt-0">
                <button class="lightbox-nav position-absolute top-50 start-0 translate-middle-y ms-2 ms-md-4 z-3" onclick="prevImage()" id="lightboxPrev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <img src="" id="lightboxImage" class="img-fluid rounded-3" style="max-height: 80vh; object-fit: contain; border: 1px solid var(--border-color);">
                <p id="lightboxCaption" class="mt-3 mb-0 fw-medium text-shadow" style="color:#fff; font-size:0.95rem;"></p>
                <button class="lightbox-nav position-absolute top-50 end-0 translate-middle-y me-2 me-md-4 z-3" onclick="nextImage()" id="lightboxNext">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const projectGalleries = {
        @foreach($projects as $index => $project)
            @if(isset($project['gallery']))
            {{ $index }}: [
                @foreach($project['gallery'] as $item)
                {
                    image: '{{ asset($item['image']) }}',
                    caption: '{{ $item['caption'] }}'
                },
                @endforeach
            ],
            @endif
        @endforeach
    };

    let currentProjectIndex = null;
    let currentImageIndex = 0;

    function openLightbox(projectIndex, imageIndex) {
        currentProjectIndex = projectIndex;
        currentImageIndex = imageIndex;
        updateLightbox();
        var myModal = new bootstrap.Modal(document.getElementById('galleryLightbox'));
        myModal.show();
    }

    function updateLightbox() {
        const gallery = projectGalleries[currentProjectIndex];
        const item = gallery[currentImageIndex];
        document.getElementById('lightboxImage').src = item.image;
        document.getElementById('lightboxCaption').textContent = item.caption;
        document.getElementById('lightboxPrev').style.display = currentImageIndex > 0 ? 'flex' : 'none';
        document.getElementById('lightboxNext').style.display = currentImageIndex < gallery.length - 1 ? 'flex' : 'none';
    }

    function prevImage() {
        if (currentImageIndex > 0) { currentImageIndex--; updateLightbox(); }
    }

    function nextImage() {
        const gallery = projectGalleries[currentProjectIndex];
        if (currentImageIndex < gallery.length - 1) { currentImageIndex++; updateLightbox(); }
    }
</script>
