<nav class="navbar has-shadow is-warning">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item has-text-weight-bold is-size-4">
                {{ config('app.name') }}
            </a>
            <a class="navbar-burger" id="navbar-burger">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navbar-menu">
            <div class="navbar-start">
                @foreach (['user', 'product', 'transaction', 'report'] as $menu)
                <a href="/{{ $menu }}" @class(['navbar-item', 'has-text-weight-semibold'=> $active == $menu])>{{ ucfirst($menu) }}</a>
                @endforeach
            </div>
            <div class="navbar-end">
                <a href="/me" @class(['navbar-item', 'has-text-weight-semibold'=> $active == "me"])">My Profile</a>
                <a href="/logout" class="navbar-item has-text-danger">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    const navbarMenu = document.getElementById('navbar-menu');
    const navbarBurger = document.getElementById('navbar-burger');

    navbarBurger.addEventListener('click', () => {
        navbarMenu.classList.toggle('is-active');
    })
</script>
@endpush