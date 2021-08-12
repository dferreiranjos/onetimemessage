<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h4>{{config('app.name')}}</h4>
    <p>O destinatário da mensagem (<strong>{{$recipient_email}}</strong>) leu a sua mensagem.</p>
    <p>A mensagem foi lida em: <strong>{{$datetime_readed}}</strong></p>
</body>
</html>
