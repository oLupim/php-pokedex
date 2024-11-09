<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    
<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="text" name="type" placeholder="Tipo" required>
    <input type="number" name="strength" placeholder="Pontos de Força" required>
    <button type="submit">Registrar Pokemon</button>
</form>




</body>
</html>