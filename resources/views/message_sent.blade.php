@extends('layouts.app_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h5>Foi confirmada e enviada a mensagem para o destinatário <strong>{{$email_address}}</strong></h5>
                <div class="my-5">
                    <a href="{{route('main_index')}}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
