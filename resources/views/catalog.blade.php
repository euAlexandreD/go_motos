@extends('layout.layout_main')
@section('content')


            @include('top_bar')

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





@endsection
