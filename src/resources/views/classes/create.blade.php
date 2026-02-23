@extends('admin.layout')

@section('content')

<h3>Ajouter Classe</h3>

<form method="POST" action="{{ route('admin.classes.store') }}">
    @csrf

    <div>
        <label>Nom de la classe</label>
        <input type="text" name="name">
    </div>

    <button type="submit">Enregistrer</button>
</form>

@endsection
