<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- <nav class="navbar navbar-expand-sm bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                </div>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-sm" style="background-color: #2c3e50;">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" data-bs-theme="dark" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-expanded="false">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="offcanvas offcanvas-end px-3 w-50 text-white" style="background-color: #2c3e50;" tabindex="-1"
                id="offcanvasMenu" aria-labelledby="offcanvasMenu">
                <div class="offcanvas-header" data-bs-theme="dark">
                    <h5 class="offcanvas-title" id="offcanvasMenu">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="ms-auto">
                        <div class="navbar-nav ms-auto">

                            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                            <a class="nav-link text-white" href="#">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead text-white text-center py-4" style="background-color: #1abc9c">
        <div class="container d-flex flex-column align-items-center">
            A Laravel Online Store
        </div>
    </header>

    {{-- CONTENT --}}

    <div class="container my-4">
        {{ $slot }}
    </div>

    {{-- END OF CONTENT --}}

    {{-- FOOTER --}}
    <!-- footer -->
    <div class="copyright py-4 text-center" style="background-color: #2c3e50;">
        <div class="container text-white">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    2024
                </a> - <b>@permadimedia</b>
            </small>
        </div>
    </div>
    <!-- footer -->

</body>

</html>
