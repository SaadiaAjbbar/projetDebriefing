@extends('layouts.admin')

@section('title', 'Ajouter une Classe')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('classes.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
            &larr; Retour à la liste
        </a>
    </div>

    <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
        <div class="px-8 py-6 border-b border-gray-100 bg-gray-50/50">
            <h1 class="text-xl font-bold text-gray-800">Créer une nouvelle classe</h1>
            <p class="text-sm text-gray-500">Remplissez les informations ci-dessous pour enregistrer la classe.</p>
        </div>

        <form method="POST" action="{{ route('classes.store') }}" class="p-8 space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nom de la classe</label>
                <input type="text" name="nom" value="{{ old('nom') }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition @error('nom') border-red-500 @enderror"
                    placeholder="Ex: Terminale S1">
                @error('nom')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Année scolaire</label>
                <input type="text" name="annee_scolaire" value="{{ old('annee_scolaire') }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition @error('annee_scolaire') border-red-500 @enderror"
                    placeholder="Ex: 2023-2024">
                @error('annee_scolaire')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-4">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-6 rounded-lg transition-all shadow-md hover:shadow-lg">
                    Enregistrer la classe
                </button>
            </div>
        </form>
    </div>
</div>
@endsection