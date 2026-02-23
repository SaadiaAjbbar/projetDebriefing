<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>

    <h2>Admin Dashboard</h2>

    <nav>
        <a href="{{ route('admin.classes.index') }}">Classes</a> |
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <hr>

    @yield('content')

</body>
</html>
