@extends('admin.layout')

@section('content')

<h3>Liste des Classes</h3>

<a href="{{ route('admin.classes.create') }}">Ajouter Classe</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    @foreach($classes as $classe)
        <tr>
            <td>{{ $classe->id }}</td>
            <td>{{ $classe->name }}</td>
            <td>
                <a href="{{ route('admin.classes.edit', $classe->id) }}">Edit</a>

                <form action="{{ route('admin.classes.destroy', $classe->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection
