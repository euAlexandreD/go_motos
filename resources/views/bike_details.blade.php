@extends('layout.layout_main')
@section('content')

@include('top_bar')

<div class="container py-5">

    <div class="row g-4">

        <!-- IMAGEM -->
        <div class="col-md-6">
            <div class="card bg-dark border-0 shadow-lg">
                <img src="https://via.placeholder.com/600x400"
                     class="img-fluid rounded"
                     alt="Moto">
            </div>
        </div>

        <!-- INFORMAÇÕES -->
        <div class="col-md-6 text-dark d-flex flex-column justify-content-center">

            <h2 class="mb-3 fw-bold">
                {{ $bike['Mark'] }} {{ $bike['Model'] }}
            </h2>

            <h3 class="text-warning mb-4">
                R$ {{ number_format($bike['price'], 0, ',', '.') ?? 'A consultar' }}
            </h3>

            <div class="bg-dark p-4 rounded shadow-sm mb-4 text-light">
                <div class="row">
                    <div class="col-6 mb-2">
                        <strong>Ano:</strong><br>
                        {{ $bike['year'] }}
                    </div>
                    <div class="col-6 mb-2">
                        <strong>KM:</strong><br>
                        {{ $bike['km'] }} km
                    </div>
                    <div class="col-6">
                        <strong>Marca:</strong><br>
                        {{ $bike['Mark'] }}
                    </div>
                    <div class="col-6">
                        <strong>Modelo:</strong><br>
                        {{ $bike["model"] }}
                    </div>
                </div>
            </div>

            <!-- BOTÕES -->
            <div class="d-flex gap-3">
                <button class="btn btn-warning px-4 fw-bold">
                    Comprar
                </button>

                <button class="btn btn-outline-light px-4">
                    Falar com vendedor
                </button>
            </div>

        </div>

    </div>

    <!-- DESCRIÇÃO -->
    <div class="row mt-5">
        <div class="col">
            <div class="card bg-dark text-light p-4 border-0 shadow">
                <h4 class="mb-3">Descrição</h4>
                <p class="text-secondary">
                    Moto em excelente estado, revisada, pronta para uso.
                    Documentação em dia.
                </p>
            </div>
        </div>
    </div>

</div>

@endsection
