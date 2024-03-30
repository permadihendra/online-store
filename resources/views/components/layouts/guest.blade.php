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

    {{-- NavBar livewire Component --}}
    <livewire:Homepage.NavBar />

    <header class="masthead text-white text-center py-4 bg-primary">
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
    <x-homepage.footer />
    <!-- footer -->

</body>

</html>
