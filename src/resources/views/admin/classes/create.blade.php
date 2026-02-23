@extends('admin.layout')

@section('content')

<h3>Ajouter Classe</h3>

<form method="POST" action="{{ route('admin.classes.store') }}">
    @csrf

    <label>Nom de la classe</label>
    <input type="text" name="name">

    <label>Année scolaire</label>
    <input type="text" name="annee_scolaire">

    <button type="submit">Ajouter</button>
</form>

@endsection
