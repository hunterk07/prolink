<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- resources/views/projets/show.blade.php -->

{{ $projet->id }} - {{ $projet->nom }} - {{ $projet->date_debut }} - {{ $projet->date_fin }}
<!-- Affiche d'autres informations selon tes besoins -->
<a href="{{ route('projets.edit', $projet->id) }}">Modifier</a>
<form action="{{ route('projets.destroy', $projet->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>

</body>
</html>
