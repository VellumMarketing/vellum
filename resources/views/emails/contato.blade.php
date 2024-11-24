<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Contato</title>
</head>
<body>
    <p><strong>Plano:</strong> {{ $dados['plano'] }}</p>
    <p><strong>Nome:</strong> {{ $dados['name'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $dados['message'] }}</p>

</body>
</html>
