<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Dashboard</title>
    <style>
        body { font-family: Arial; margin: 0; }
        .sidebar { width: 220px; background: #222; color: #fff; height: 100vh; position: fixed; }
        .sidebar a { display: block; color: #fff; padding: 12px; text-decoration: none; }
        .sidebar a:hover { background: #444; }
        .content { margin-left: 220px; padding: 20px; }
        .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
        .card { padding: 20px; background: #f5f5f5; border-radius: 6px; }
    </style>
</head>
<body>

<div class="sidebar">
    <h3 style="padding:12px;">Admin</h3>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('classes.index') }}">Classes</a>
    <a href="#">Sprints</a>
    <a href="#">Briefs</a>
    <a href="#">Utilisateurs</a>
    <a href="#">Compétences</a>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
