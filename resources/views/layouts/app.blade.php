<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Pribadi [Nama Anda] - Full Stack Laravel Developer & UI/UX Designer. Lulusan Sistem Informasi.">
    <meta name="keywords" content="Portfolio, Laravel Developer, Full Stack Developer, Web Developer, UI/UX Designer, PHP, Bootstrap, JavaScript">
    <meta name="author" content="[Nama Anda]">
    
    <!-- Open Graph Meta (untuk preview di WhatsApp, Facebook, dll) -->
    <meta property="og:title" content="Bernard Subur | Web Developer & UI/UX Designer">
    <meta property="og:description" content="Portofolio Bernard Subur - Full Stack Laravel Developer & UI/UX Designer. Lulusan S1 Sistem Informasi.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bernardsubur.github.io/portofolio/">
    <meta property="og:image" content="https://bernardsubur.github.io/portofolio/images/profile/og-image.png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="512">
    <meta property="og:image:type" content="image/png">
    <meta property="og:site_name" content="Bernard Subur Portfolio">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card (juga dipakai WhatsApp sebagai fallback) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bernard Subur | Web Developer & UI/UX Designer">
    <meta name="twitter:description" content="Portofolio Bernard Subur - Full Stack Laravel Developer & UI/UX Designer.">
    <meta name="twitter:image" content="https://bernardsubur.github.io/portofolio/images/profile/og-image.png">

    <title>Bernard Subur</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon-profile.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-profile.jpg') }}">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" tabindex="0">

    <!-- Loading Spinner -->
    <div id="loader" class="loader-container">
        <div class="loader-brand">
            BERNARD.
        </div>
    </div>

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Typed JS for Typing Effect -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
