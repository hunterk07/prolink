<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- resources/views/projets/edit.blade.php -->

<form action="{{ route('projets.update', $projet->id) }}" method="post">
    @csrf
    @method('PUT')
    <!-- Ajoute des champs préremplis avec les informations actuelles -->
    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>

