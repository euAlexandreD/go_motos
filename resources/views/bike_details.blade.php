@extends('layout.layout_main')
@section('content')

@include('top_bar')

<div class="container py-5">
    <div class="row g-4">

        <div class="col-lg-8">
            <div class="card bg-white border-0 shadow-sm overflow-hidden mb-4">
                <div class="p-2">
                    <img id="mainImage"
                        src="{{ asset('img/bikes/' . ($bike->images->first()->image ?? 'default.jpg')) }}"
                        class="img-fluid rounded main-bike-img"
                        alt="Moto">
                </div>

                @if($bike->images->count() > 1)
                <div class="d-flex gap-2 p-3 pt-0 flex-wrap">
                    @foreach($bike->images as $image)
                        <img src="{{ asset('img/bikes/' . $image->image) }}"
                            class="thumb-bike"
                            onclick="changeImage(this)">
                    @endforeach
                </div>
                @endif
            </div>

            <div class="card border-0 shadow-sm p-4">
                <h4 class="fw-bold mb-3 border-bottom pb-2">Descrição do Vendedor</h4>
                <div class="text-muted lh-lg">
                    <p>{{ $bike->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 20px;">
                <div class="card border-0 shadow-sm p-4 mb-4">
                    <h1 class="h3 fw-bold mb-1 text-dark">{{ $bike->Mark }} {{ $bike->Model }}</h1>
                    <p class="text-muted small mb-3">Publicado em {{ $bike->created_at->format('d/m/Y') }}</p>

                    <h2 class="text-primary fw-bold mb-4">
                        R$ {{ number_format($bike->price, 0, ',', '.') }}
                    </h2>

                    <hr class="my-4">

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <small class="text-uppercase text-muted d-block" style="font-size: 10px;">Ano</small>
                            <span class="fw-bold"><i class="bi bi-calendar-event me-1"></i> {{ $bike->year }}</span>
                        </div>
                        <div class="col-6">
                            <small class="text-uppercase text-muted d-block" style="font-size: 10px;">Quilometragem</small>
                            <span class="fw-bold"><i class="bi bi-speedometer2 me-1"></i> {{ number_format($bike->km, 0, '', '.') }} km</span>
                        </div>
                        <div class="col-6">
                            <small class="text-uppercase text-muted d-block" style="font-size: 10px;">Marca</small>
                            <span class="fw-bold">{{ $bike->Mark }}</span>
                        </div>
                        <div class="col-6">
                            <small class="text-uppercase text-muted d-block" style="font-size: 10px;">Modelo</small>
                            <span class="fw-bold">{{ $bike->model }}</span>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg fw-bold py-3">
                            <i class="bi bi-whatsapp me-2"></i> Chamar no WhatsApp
                        </button>
                        <button class="btn btn-outline-dark btn-lg py-3">
                            Fazer uma proposta
                        </button>
                    </div>
                </div>

                <div class="alert alert-light border-0 shadow-sm d-flex align-items-center">
                    <i class="bi bi-shield-check text-success fs-3 me-3"></i>
                    <div>
                        <small class="d-block fw-bold">Dica de segurança:</small>
                        <small class="text-muted">Nunca faça pagamentos antecipados sem ver o veículo.</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    body { background-color: #f8f9fa; }

    .main-bike-img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 8px;
        transition: 0.3s;
    }

    .thumb-bike {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
        cursor: pointer;
        border: 2px solid transparent;
        opacity: 0.7;
        transition: 0.2s;
    }

    .thumb-bike:hover, .thumb-bike.active {
        opacity: 1;
        border-color: #0d6efd;
    }

    .sticky-top { z-index: 10; }
</style>

<script>
    function changeImage(element) {
        document.getElementById("mainImage").src = element.src;
        // Opcional: Adicionar classe ativa na borda da miniatura
        document.querySelectorAll('.thumb-bike').forEach(img => img.classList.remove('active'));
        element.classList.add('active');
    }
</script>

@endsection
