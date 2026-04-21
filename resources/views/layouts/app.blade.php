<!DOCTYPE html>
<html>
<head>
    <title>Motor Custom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f1f1;
        }

        :root {
            --primary: #c1121f;
            --dark: #1a1a1a;
        }

        .navbar {
            background: linear-gradient(90deg, #1a1a1a, #2b2b2b);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card {
            border-radius: 14px;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .btn-danger {
            background: var(--primary);
            border: none;
        }

        .btn-danger:hover {
            background: #a30f1a;
        }

        .table {
            background: white;
            border-radius: 10px;
        }

        .table th {
            background: #f8f9fa;
            font-weight: 600;
        }

        .btn:hover {
            transform: scale(1.03);
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .card img {
            transition: 0.3s;
        }

        .card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand text-danger" href="/">🏍 Motor Custom</a>

        <div>
            <a href="/" class="btn btn-outline-light me-2">Home</a>
            <a href="/admin/products" class="btn btn-outline-light">Admin</a>
            <a href="/admin/dashboard" class="btn btn-outline-light me-2">Dashboard</a>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function showLoading(text = 'Processing...') {
    Swal.fire({
        title: text,
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading()
    });
}

@if(session('success'))
Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: '{{ session('success') }}',
    showConfirmButton: false,
    timer: 2000
});
@endif
</script>

@stack('scripts')

</body>
</html>
