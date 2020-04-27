@extends('modules.layout')

@section('title')
    Offline
@endsection
@section('contenido')

    <div class="row">
        <div class="col-12">
            <h2 class="text-center"><p>Actualmente no estás conectado a ninguna red</p></h2>
        </div>
    </div>
    <div class="row mt-y3">
        <div class="col-md-12 text-center">
            <img src="{{ asset('images/logo_pichincha_oficial.png') }}" width="200px" alt="">
        </div>
    </div>
@endsection