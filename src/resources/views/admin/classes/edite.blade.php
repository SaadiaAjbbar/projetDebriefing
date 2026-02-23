@extends('admin.layout')

@section('content')

<h3>Modifier Classe</h3>

<form method="POST" action="{{ route('admin.classes.update', $classe->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Nom</label>
        <input type="text" name="name" value="{{ $classe->name }}">
    </div>

    <button type="submit">Mettre à jour</button>
</form>

@endsection
