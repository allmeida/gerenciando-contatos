<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <br>
    <h1>Editar Contato</h1>

        <form action="/contatos/{{$contato->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" value="{{$contato->nome}}">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" name="telefone" value="{{$contato->telefone}}">
            </div>
            <button class="btn btn-primary" type="submit">Atualizar</button>
        </form>
</div>
</body>
</html>
