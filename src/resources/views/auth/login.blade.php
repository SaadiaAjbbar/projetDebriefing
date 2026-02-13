@extends('layouts.admin')

@section('title', 'Connexion')

@section('content')
<div class="min-h-[80vh] flex flex-col justify-center items-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Connexion</h2>

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required 
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="admin@exemple.com">
            </div>

            <div>
                <label class="block text-sm font-medium text-green-700">Mot de passe</label>
                <input type="password" name="password" required 
                    class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                Se connecter
            </button>
        </form>

        @if ($errors->any())
        <div class="mt-4 p-3 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm">
            {{ $errors->first() }}
        </div>
        @endif
    </div>
</div>
@endsection