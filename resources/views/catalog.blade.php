@extends('layout.layout_main')
@section('content')

    @include('top_bar')

    <div class="container">
        <div class="col-2">
            <div class="col">
                <img>
                <hr>
                <h1 class="fs-3 text-dark">Nome da moto</h1>
            </div>
            <div class="col">
                <p>Modelo da moto</p>
                <p>ano</p>
                <p>km</p>
                <hr>
            </div>
            <div class="col">
                <p>Valor</p>
            </div>
        </div>
    </div>
@endsection
