<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    

@foreach($pokemon as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
        <p>{{ $entity->type }}</p>
        <p>{{ $entity->strength }}</p>
        <a href="{{ url('pokemon/'.$entity->id.'/edit') }}">Editar</a>
        <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach



</body>
</html>