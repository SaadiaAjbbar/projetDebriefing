@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Liste des Classes</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('classes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
        Ajouter une classe
    </a>

    <table class="min-w-full bg-white border border-gray-200 rounded">
        <thead>
            <tr class="bg-gray-100 border-b">
                <th class="text-left py-2 px-4">ID</th>
                <th class="text-left py-2 px-4">Nom</th>
                <th class="text-left py-2 px-4">Année scolaire</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $classe)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $classe->id }}</td>
                    <td class="py-2 px-4">{{ $classe->nom }}</td>
                    <td class="py-2 px-4">{{ $classe->annee_scolaire }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
