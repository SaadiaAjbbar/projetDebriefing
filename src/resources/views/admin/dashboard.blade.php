@extends('layouts.admin')

@section('content')
<h1>Dashboard Administrateur</h1>

<div class="cards">
    <div class="card">📚 Classes<br><strong>{{ $classesCount }}</strong></div>
    <div class="card">🏃 Sprints<br><strong>{{ $sprintsCount }}</strong></div>
    <div class="card">📝 Briefs<br><strong>{{ $briefsCount }}</strong></div>
    <div class="card">👨‍🏫 Formateurs<br><strong>{{ $formateursCount }}</strong></div>
    <div class="card">🎓 Étudiants<br><strong>{{ $etudiantsCount }}</strong></div>
    <div class="card">🧠 Compétences<br><strong>{{ $competencesCount }}</strong></div>
</div>
@endsection
