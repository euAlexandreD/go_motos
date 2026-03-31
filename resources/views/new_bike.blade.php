@extends('layout.layout_main')
@section('content')

@include('top_bar')

<div class="container py-5 d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">

        <div class="card bg-dark text-light shadow-lg border-0 p-4">

            <h3 class="text-center mb-4">Cadastrar Moto</h3>

            <form action="{{ route('newBikeSubmit') }}" method="post" enctype="multipart/form-data">
                @csrf

                  <div class="mb-3">
                    <label class="form-label">Imagens</label>
                    <input type="file"
                           class="form-control-file"
                           name="images[]" multiple accept="image/*">
                </div>

                <!-- Marca -->
                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text"
                           class="form-control bg-secondary text-light border-0"
                           name="text_mark"
                           value="{{ old('mark') }}">
                </div>

                <!-- Modelo -->
                <div class="mb-3">
                    <label class="form-label">Modelo</label>
                    <input type="text"
                           class="form-control bg-secondary text-light border-0"
                           name="text_model"
                           value="{{ old('model') }}">
                </div>

                <!-- Ano e KM (lado a lado) -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Ano</label>
                        <input type="text"
                               class="form-control bg-secondary text-light border-0"
                               name="text_year"
                               value="{{ old('year') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">KM</label>
                        <input type="text"
                               class="form-control bg-secondary text-light border-0"
                               name="text_km"
                               value="{{ old('km') }}">
                    </div>
                </div>

                <!-- Preço -->
                <div class="mb-4">
                    <label class="form-label">Valor</label>
                    <input type="text"
                           class="form-control bg-secondary text-light border-0"
                           name="text_price"
                           value="{{ old('price') }}">
                </div>

                <!-- Descrição -->
                 <div class="mb-4">
                    <label class="form-label">Descrição</label>
                    <textarea
                           class="form-control bg-secondary text-light border-0"
                           name="text_description"
                           rows="6"
                           value="{{ old('price') }}"></textarea>
                </div>



                <!-- Botão -->
                <button type="submit" class="btn btn-warning w-100 py-2 fw-bold">
                    Cadastrar Moto
                </button>

            </form>

        </div>

    </div>
</div>

@endsection
