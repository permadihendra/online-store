<div class="p-3 col fixed text-white bg-dark">
    <a wire:navigate href="{{ route('admin') }}" class="text-white text-decoration-none">Admin Panel</a>
    <hr>
    <ul class="nav flex-column">
        <li><a wire:navigate href="{{ route('admin') }}" class="nav-link text-white">Home</a></li>
        <li><a wire:navigate href="{{ route('admin.products') }}" class="nav-link text-white">Products</a></li>
        <li>
            <br>
        </li>
        <li><a wire:navigate href="{{ route('home') }}" class="nav-link text-white">- back to homepage</a></li>
    </ul>
</div>
