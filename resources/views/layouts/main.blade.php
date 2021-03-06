<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/png" href="/img/favicon.png" /> --}}

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/vendor/lightbox/dist/ekko-lightbox.css">

    <!-- Main CSS -->
    <!-- Fontawesome --> <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Ilham Personal Web</title>

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">M. Ilham Friansyah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#section-cv">Curiculum Vitae</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    
        <!-- Plugin JS-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/vendor/lightbox/dist/ekko-lightbox.js"></script>
    
        <!-- Custom JS for Scrolling when Clicked -->
        <script src="/js/scrolling-nav.js"></script>
        <script src="/js/lightbox.js"></script>
</body>

</html>