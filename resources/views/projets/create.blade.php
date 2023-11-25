<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- resources/views/projets/create.blade.php -->

<form action="{{ route('projets.store') }}" method="post">
    @csrf
    <!-- Ajoute des champs pour les informations du projet -->
    <button type="submit">Enregistrer</button>
</form>
</body>
</html>

