
@foreach($bikes as $bike)
<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card bg-secondary text-light shadow-lg border-0 h-100">



        @if (isset($bike['images']) && !empty($bike['images']))
            <img src="{{ asset('img/bikes/' . $bike['image'][0]['image']) }}"
             class="card-img-top"
             alt="Moto">
        @else
             {{-- Imagem padrão caso não tenha imagens --}}
            <img src="{{ asset('img/bikes/default.jpg') }}"
                 class="card-img-top"
                 alt="Sem imagem"
                 style="height: 200px; object-fit: cover;">
        @endif

                <div class="card-body">


                    <h5 class="card-title">{{ $bike['Mark'] }}</h5>

                    <p class="card-text">
                    <strong>Ano:</strong> {{ $bike['year'] }} <br>
                    <strong>Km:</strong> {{ $bike['km'] }} <br>
                    <strong>Modelo:</strong> {{ $bike['Model'] }}
                    </p>

                    @if ($bike['price'])
                        <h4 class="text-warning">R$ {{ $bike['price'] }}</h4>
                    @else
                        <h4 class="text-warning">Valor a consultar</h4>
                    @endif

                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-outline-light btn-sm"><a href="{{ route('bikeDetails', ['id' => Crypt::encrypt($bike['id'])]) }}">Detalhes</a></button>
                            <button class="btn btn-warning btn-sm">Entrar em contato</button>
                        </div>

                </div>
    </div>
</div>
@endforeach
