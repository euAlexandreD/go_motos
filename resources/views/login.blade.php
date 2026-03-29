@extends('layout.layout_main')
@section('content')

<div class="container-fluid vh-100">
    <div class="row h-100">

        <!-- LADO ESQUERDO (IMAGEM) -->
        <div class="col-md-6 d-none d-md-block p-0">
            <div class="h-100 w-100 bg-image"></div>
        </div>

        <!-- LADO DIREITO (FORM) -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-dark">

            <div class="w-75">

                <h2 class="text-light mb-4 text-center">Acesse sua conta</h2>

                <form action="/loginSubmit" method="post">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label text-light">E-mail</label>
                        <input type="text"
                               class="form-control bg-secondary text-light border-0"
                               name="text_email"
                               value="{{ old('text_email') }}">

                        @error('text_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Senha -->
                    <div class="mb-3">
                        <label class="form-label text-light">Senha</label>
                        <input type="password"
                               class="form-control bg-secondary text-light border-0"
                               name="text_password">

                        @error('text_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning w-100 fw-bold">
                            Entrar
                        </button>
                    </div>

                </form>

                <!-- Erro -->
                @if(session('loginError'))
                    <div class="alert alert-danger mt-3 text-center">
                        {{ session('loginError') }}
                    </div>
                @endif

            </div>

        </div>

    </div>
</div>

<style>
/* Imagem de fundo */
.bg-image {
    background-image: url('{{ asset("assets/images/img-bg-temp.jpeg") }}'); /* troca pela sua imagem */
    background-size: cover;
    background-position: center;
}


/* Ajuste geral */
body {
    overflow: hidden;
}
</style>

@endsection
