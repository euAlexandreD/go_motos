<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-2">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a class="navbar-brand m-0" href="#">
            <img src="{{ asset('assets/images/logo_ajustado.png') }}" class="logo-navbar">
        </a>

        <!-- TEXTO CENTRAL -->
        <div class="text-light fw-light text-center d-none d-lg-block flex-grow-1">
            🏆 Tornando seu sonho realidade 🏆
        </div>

        <!-- Botão mobile -->
        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Quem somos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ route('home') }}">Catálogo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Contato</a>
                </li>

                @if (session('user'))
                    <li class="nav-item">
                        <a class="btn btn-warning ms-3 px-3" href="{{ route('new') }}">
                            Anunciar
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2 px-3" href="{{ route('logout') }}">
                            Logout
                        </a>
                    </li>

                    <li class="nav-item">
                        <span class="text-light ms-3">
                               Olá, {{ session('user.name') }}
                        </span>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2 px-3" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2 px-3" href="#">
                            Cadastre-se
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
<style>
    .logo-navbar {
    max-height: 50px;
    height: auto;
    width: auto;
}
</style>
