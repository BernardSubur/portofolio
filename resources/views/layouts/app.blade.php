<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Yosef Bernardus Janson Subur, S.Kom. — Junior Web Developer & Information Systems Graduate. Pengembang web yang berfokus pada antarmuka yang responsif, intuitif, dan berorientasi pada pengguna.">
    <meta name="keywords" content="Portfolio, Junior Web Developer, Sistem Informasi, Web Developer, UI/UX Designer, PHP, JavaScript, HTML, CSS, MySQL, Figma">
    <meta name="author" content="Yosef Bernardus Janson Subur">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Bernard Subur | Junior Web Developer">
    <meta property="og:description" content="Portfolio Yosef Bernardus Janson Subur — Junior Web Developer & Information Systems Graduate.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bernardsubur.github.io/portofolio/">
    <meta property="og:image" content="https://bernardsubur.github.io/portofolio/images/profile/og-image.png">
    <meta property="og:site_name" content="Bernard Subur Portfolio">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bernard Subur | Junior Web Developer">
    <meta name="twitter:description" content="Portfolio Yosef Bernardus Janson Subur — Junior Web Developer & Information Systems Graduate.">
    <meta name="twitter:image" content="https://bernardsubur.github.io/portofolio/images/profile/og-image.png">

    <title>Bernard Subur — Junior Web Developer</title>
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
<body>

    <!-- Loading Spinner -->
    <div id="loader" class="loader-container">
        <div class="loader-brand">BERNARD<span class="loader-dot">.</span></div>
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
    <button type="button" id="btn-back-to-top" aria-label="Back to top">
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
