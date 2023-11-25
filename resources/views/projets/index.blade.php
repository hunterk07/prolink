<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- D'autres balises meta et en-têtes peuvent être ajoutées ici -->
</head>
<body>
    <!-- resources/views/projets/index.blade.php -->
    @foreach($projets as $projet)
        {{ $projet->id }} - {{ $projet->nom }} - {{ $projet->date_debut }} - {{ $projet->date_fin }}
        <a href="{{ route('projets.show', $projet->id) }}">Voir</a>
        <a href="{{ route('projets.edit', $projet->id) }}">Modifier</a>
        <form action="{{ route('projets.destroy', $projet->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    @endforeach
</body>
</html>
