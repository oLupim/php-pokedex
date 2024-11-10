<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    
<form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nome" value="{{ $pokemon->name }}" required>
    <input type="text" name="type" placeholder="Tipo" value="{{ $pokemon->type }}" required>
    <input type="number" name="strength" placeholder="Pontos de Força" value="{{ $pokemon->strength }}" required>
    <button type="submit">Editar Pokemon</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>