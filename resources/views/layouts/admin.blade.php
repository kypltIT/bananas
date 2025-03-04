<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin-style.css') }}">
</head>
<body>
    <div class="admin-sidebar">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
            <li><a href="{{ route('admin.products') }}">Manage Products</a></li>
            <li><a href="{{ route('admin.orders') }}">Manage Orders</a></li>
            <li><a href="{{ route('admin.revenue') }}">Revenue Reports</a></li>
            <li><a href="{{ route('admin.settings') }}">Settings</a></li>
        </ul>
    </div>

    <div class="admin-content">
        @yield('content')
    </div>
</body>
</html>
