@extends('layouts.app_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h5>Foi enviado um email de confirmação para <strong>{{$email_address}}</strong></h5>
                <p>Verifique a sua caixa de email ou span</p>
                <div class="my-5">
                    <a href="{{route('main_index')}}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
