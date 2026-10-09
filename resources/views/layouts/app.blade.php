<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Perpus')</title>
    <!-- Bootstrap CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom library style -->
    <link
        href="{{ asset('css/library.css') }}?v=2"
        rel="stylesheet"
        >
</head>

<body>
    
    <nav class="custom-navbar">
        <div class="custom-navbar-inner">

            <!-- Brand sebelah kiri -->
            <a class="custom-brand"
            href="{{ route('books.index') }}">
                <span>Mini Perpus</span>
            </a>

            <!-- Burger button: hanya tampil di mobile -->
            <button
                class="burger-button"
                id="burgerButton"
                type="button"
                aria-label="Buka menu navigasi"
                aria-expanded="false"
                aria-controls="navbarMenu"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Menu navigasi -->
            <div class="custom-nav" id="navbarMenu">

                <a class="custom-nav-link
                {{ request()->routeIs('books.*') ? 'active' : '' }}"
                href="{{ route('books.index') }}">
                    Buku
                </a>

                <a class="custom-nav-link
                    {{ request()->routeIs('categories.*') ? 'active' : '' }}"
                    href="{{ route('categories.index') }}">
                    Kategori
                </a>

            </div>

        </div>
    </nav>

    <div class="container page-content">

        <!-- Alert Flash Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const burgerButton = document.getElementById('burgerButton');
    const navbarMenu = document.getElementById('navbarMenu');

    if (!burgerButton || !navbarMenu) return;

    burgerButton.addEventListener('click', function () {
        const isOpen = navbarMenu.classList.toggle('show');

        burgerButton.classList.toggle('is-open', isOpen);
        burgerButton.setAttribute('aria-expanded', String(isOpen));
        burgerButton.setAttribute(
            'aria-label',
            isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi'
        );
    });
});
</script>
</body>
</html>
