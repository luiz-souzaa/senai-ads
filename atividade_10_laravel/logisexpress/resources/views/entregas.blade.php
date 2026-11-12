<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregas - LogisExpress</title>
</head>
<body>
    <h1>LogisExpress - Lista de Entregas</h1>
    @foreach ($entregas as $entrega)
        <li>{{ $entrega['destinatario'] }} — {{ $entrega['endereco'] }}</li>
    @endforeach
    <p>Alteração para o desafio final</p>
</body>
</html>