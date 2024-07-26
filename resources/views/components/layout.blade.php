<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ $title }}</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="AmperePedia merupakan website pembayaran listrik pascabayar. Bayar tagihan listrik Anda tanpa ribet! Hanya dengan beberapa klik saja.">
    <meta name="keywords"
        content="AmperePedia Website Pembayaran Listrik Pascabayar Buka 24 Jam, Cepat, Murah, Aman, Terpercaya">
    <meta name="author" content="Overdoshit">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <x-navbar></x-navbar>

    <main>
        {{ $slot }}
    </main>

    <x-footer></x-footer>

    <x-login></x-login>
    <x-register></x-register>

    <!-- Back to top -->
    <div class="back-top" data-bs-toggle="tooltip" data-bs-title="Back to Top"></div>

    <!-- Custom JS -->
    <script src="assets/js/index.js"></script>

    <!-- Vendors -->
    <script src="assets/js/ityped.js"></script>

    <!-- Theme Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>
