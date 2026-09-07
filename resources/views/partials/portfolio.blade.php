<section id="portfolio" class="py-5 section-bg-alt">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold section-title">Portofolio</h2>
            <div class="divider mx-auto bg-primary"></div>
        </div>
        
        <div class="row gy-4">
            @foreach($projects as $index => $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift portfolio-card">
                    <div class="position-relative bg-light {{ isset($project['image']) || isset($project['gallery']) ? '' : 'pt-4 px-4 text-center d-flex align-items-end justify-content-center' }}" style="height: 200px; overflow: hidden;">
                        @if(isset($project['gallery']))
                            <div class="gallery-item w-100 h-100" style="cursor: pointer;" onclick="openLightbox({{ $index }}, 0)">
                                <img src="{{ asset($project['gallery'][0]['image']) }}" alt="{{ $project['gallery'][0]['caption'] }}" class="w-100 h-100 gallery-img" style="object-fit: cover; transition: transform 0.3s ease;">
                                <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease; pointer-events: none;">
                                    <i class="bi bi-images text-white fs-1"></i>
                                </div>
                                <div class="position-absolute bottom-0 end-0 p-2 px-3 text-white" style="background: rgba(0,0,0,0.6); border-top-left-radius: 8px; pointer-events: none;">
                                    <i class="bi bi-images me-1"></i> +{{ count($project['gallery']) - 1 }}
                                </div>
                            </div>
                        @elseif(isset($project['image']))
                            <img src="{{ Str::startsWith($project['image'], 'http') ? $project['image'] : asset($project['image']) }}" alt="{{ $project['name'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <i class="bi bi-browser-chrome text-primary opacity-25" style="font-size: 8rem; margin-bottom: -20px;"></i>
                        @endif
                        <div class="position-absolute top-0 start-0 w-100 p-3 d-flex justify-content-between" style="pointer-events: none;">
                            <span class="badge {{ $project['status'] == 'Live' ? 'bg-success' : 'bg-primary' }} rounded-pill shadow-sm">{{ $project['status'] }}</span>
                            <span class="badge bg-dark rounded-pill shadow-sm">{{ $project['role'] }}</span>
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
                        @if(isset($project['gallery']))
                        <button onclick="openLightbox({{ $index }}, 0)" class="btn btn-primary btn-sm flex-grow-1 rounded-pill">
                            <i class="bi bi-images me-1"></i> View Gallery
                        </button>
                        @endif
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

<!-- Lightbox Modal -->
<div class="modal fade" id="galleryLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
            </div>
            <div class="modal-body text-center position-relative pt-0">
                <button class="btn btn-dark position-absolute top-50 start-0 translate-middle-y ms-2 ms-md-4 rounded-circle z-3 shadow" onclick="prevImage()" id="lightboxPrev" style="width: 45px; height: 45px; background-color: rgba(0,0,0,0.7); border: none;"><i class="bi bi-chevron-left fs-5"></i></button>
                <img src="" id="lightboxImage" class="img-fluid rounded-3 shadow-lg" style="max-height: 80vh; object-fit: contain;">
                <p id="lightboxCaption" class="text-white mt-3 mb-0 fs-5 fw-medium text-shadow"></p>
                <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y me-2 me-md-4 rounded-circle z-3 shadow" onclick="nextImage()" id="lightboxNext" style="width: 45px; height: 45px; background-color: rgba(0,0,0,0.7); border: none;"><i class="bi bi-chevron-right fs-5"></i></button>
            </div>
        </div>
    </div>
</div>

<style>
    .gallery-item:hover .gallery-img {
        transform: scale(1.05);
    }
    .gallery-item:hover .gallery-overlay {
        opacity: 1 !important;
    }
    .text-shadow {
        text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
    }
</style>

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
        
        document.getElementById('lightboxPrev').style.display = currentImageIndex > 0 ? 'block' : 'none';
        document.getElementById('lightboxNext').style.display = currentImageIndex < gallery.length - 1 ? 'block' : 'none';
    }

    function prevImage() {
        if (currentImageIndex > 0) {
            currentImageIndex--;
            updateLightbox();
        }
    }

    function nextImage() {
        const gallery = projectGalleries[currentProjectIndex];
        if (currentImageIndex < gallery.length - 1) {
            currentImageIndex++;
            updateLightbox();
        }
    }
</script>
