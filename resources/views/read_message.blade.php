@extends('layouts.app_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h5>Esta mensagem foi enviada por <strong>{{$emissor}}</strong></h5>
                <p class="alert alert-danger p-3 text-center mb-5">Esta mensagem só pode ser lida uma vez</p>

                <h4 class="alert alert-info p-5 text-center">{{$mensagem}}</h4>

                <div class="my-5">
                    <a href="{{route('main_index')}}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
