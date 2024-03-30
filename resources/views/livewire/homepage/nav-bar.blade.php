<nav class="navbar navbar-expand-sm bg-secondary">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler" data-bs-theme="dark" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-expanded="false">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="offcanvas offcanvas-end px-3 w-50 text-white bg-secondary" tabindex="-1" id="offcanvasMenu"
            aria-labelledby="offcanvasMenu">
            <div class="offcanvas-header" data-bs-theme="dark">
                <h5 class="offcanvas-title" id="offcanvasMenu">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="ms-auto">
                    <div class="navbar-nav ms-auto">

                        {{-- Set Link to actived with active class based on --}}
                        <a wire:navigate class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} "
                            href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href="#">About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
