<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Brief Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen font-sans antialiased">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-black tracking-tight text-blue-600">BRIEF<span class="text-gray-800">EDU</span></span>
                </div>

                <div class="flex items-center gap-6">
                    <a href="{{ route('classes.index') }}" class="text-gray-600 hover:text-blue-600 font-semibold transition-colors">
                        Classes
                    </a>
                    
                    @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-gray-100 hover:bg-red-50 hover:text-red-600 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium transition-all">
                            Déconnexion
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="text-center py-6 text-gray-400 text-sm">
        &copy; {{ date('Y') }} - Gestion Scolaire Laravel
    </footer>

</body>
</html>