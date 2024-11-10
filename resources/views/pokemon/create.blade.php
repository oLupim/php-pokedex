<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    
<form action="{{ url('pokemon') }}" method="POST" class="max-w-sm mx-auto mt-5"> @csrf
    <div class="mb-5">
        <input type="text" name="name" placeholder="Nome" required>
    </div>
   
    <div class="mb-5"> 
        <input type="text" name="type" placeholder="Tipo" required>
    </div>

    <div class="mb-5"> 
    <input type="number" name="strength" placeholder="Pontos de Força" required>
    </div>

    <div class="mb-5"> 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Pokemon</button>
    </div>


</form>




<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>