<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin - Online Store')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="row g-0">
        {{-- Sidebar --}}
        <livewire:admin.sidebar />
        {{-- end Sidebar --}}

        <div class="col content-grey">

            {{-- user navigation --}}
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </nav>


            {{-- CONTENT --}}

            <div class="container my-4">
                {{ $slot }}
            </div>

            {{-- END OF CONTENT --}}


        </div>

    </div>

    {{-- NavBar livewire Component --}}


    {{-- Header Blade --}}

    {{-- @if (request()->routeIs('/'))
        <x-homepage.header :title="__('A Laravel Online Store')" />
    @elseif (request()->routeIs('home'))
        <x-homepage.header :title="__('Home Page')" />
    @endif --}}



    <!-- footer -->
    <x-homepage.footer />
    <!-- footer -->

</body>

</html>
