<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body class="bg-gradient-to-r from-red-400 via-red-500 to-red-600">
    
<div class="max-w-sm mx-auto mt-5">
    @foreach($pokemon as $entity)
        <div class="mb-5 bg-blue-300 bg-red-500 border-4 border-gray-700 rounded-lg p-5 flex flex-col items-center shadow-xl relative">
            <h3 class="text-white text-2xl font-bold mb-2">{{ $entity->name }}</h3>
            
            <div class="bg-gray-800 rounded-md px-4 py-2 w-full text-center">
                <p class="text-yellow-300 text-sm font-semibold">{{ $entity->type }}</p>
                <p class="text-white text-m mt-1">Força: {{ $entity->strength }}</p>
            </div>


            <div class="flex space-x-4">
                <a class="mt-3 bg-white hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" href="{{ url('pokemon/'.$entity->id.'/edit') }}">Editar</a>
                <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="mt-3 border 2 border-white hover:bg-white hover:text-gray-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center text-white" type="submit">Deletar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>