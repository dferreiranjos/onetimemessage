<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h4>{{config('app.name')}}</h4>
    <p>Você tem uma mensagem para ler em {{config('app.name')}}</p>
    <p>IMPORTANTE: A mensagem só poderá ser lida uma única vez.</p>
    <p><a href="{{route('main_read', ['purl'=>$purl_code])}}">Ler mensagem</a></p>
</body>
</html>
