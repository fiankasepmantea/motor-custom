<!DOCTYPE html>
<html>
<head>
    <title>Motor Custom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f8f9fa; }
        .primary { color: #c1121f; }
        .navbar-brand { font-weight: bold; }

        .card {
            border-radius: 12px;
            border: none;
            overflow: hidden;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        .btn-danger {
            background-color: #c1121f;
            border: none;
        }

        .table {
            background: white;
            border-radius: 10px;
        }

        .btn:hover {
            transform: scale(1.03);
            transition: .2s;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand text-danger" href="/">Motor Custom</a>
        <div>
            <a href="/" class="btn btn-outline-light me-2">Home</a>
            <a href="/admin/products" class="btn btn-outline-light">Admin</a>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// 🔹 Global Loading
function showLoading(text = 'Processing...') {
    Swal.fire({
        title: text,
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading()
    });
}

// 🔹 Toast Success
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
