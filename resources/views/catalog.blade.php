@extends('layout.layout_main')
@section('content')


            @include('top_bar')
                <div class="col mt-5 d-flex justify-content-center">

                    <div class="banner-parallax">
                        <div class="overlay"></div>
                    </div>

                </div>

            @if(count($bikes) == 0)

                <div class="row mt-5">
                    <div class="col text-center">
                        <p class="display-6 mb-5 text-secondary opacity-50">Nenhum veiculo adicionado!</p>
                        <a href="{{ route('new') }}" class="btn btn-secondary btn-lg p-3 px-5">
                            <i class="fa-regular fa-pen-to-square me-3"></i>Clique e faça seu primeiro cadastro
                        </a>
                    </div>
                </div>

                @else

                    <div class="container py-5">
                        <div class="row">

                            @foreach ($bikes as $bike)

                            @include('bike')

                        @endforeach
                    @endif
                </div>
            </div>


<style>
     .banner-parallax{
    width: 80%;
    height: 350px;
    background-image: url("{{ asset('assets/images/editada_fachada.png') }}");
    background-size: cover;
    background-position: bottom center;
    background-attachment: fixed; /* efeito parallax */
    position: relative;
    border-radius: 8px;
    overflow: hidden;
}

    .overlay{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        background: rgba(0,0,0,0.5); /* camada preta */
    }
</style>


@endsection
