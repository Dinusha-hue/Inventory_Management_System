<!DOCTYPE html>
<html>
<head>
    <title>Inventory System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .navbar-brand {
            flex: 1;
            text-align: center;
        }
        .navbar {
            justify-content: center;
        }
        .navbar .navbar-brand {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><h2>Inventory System</h2></a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
