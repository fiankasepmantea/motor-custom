<!DOCTYPE html>
<html>
<head>
    <title>Motor Custom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f5f5f5; }
        .primary { color: #c1121f; }
        .bg-primary-custom { background-color: #c1121f; }
        .card:hover {
            transform: scale(1.03);
            transition: 0.3s;
        }
        .btn-danger {
            background-color: #c1121f;
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
        <a class="navbar-brand text-danger" href="/">Motor Custom</a>
        <a href="/admin/products" class="btn btn-outline-light">Admin</a>
        </div>
    </nav>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
