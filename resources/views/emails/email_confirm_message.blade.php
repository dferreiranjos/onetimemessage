<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h4>{{config('app.name')}}</h4>
    <p>Clique no link abaixo para confirmar a mensagem</p>
    <p><a href="{{route('main_confirm', ['purl'=>$purl_code])}}">Confirmar mensagem</a></p>
</body>
</html>
