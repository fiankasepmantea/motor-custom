@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <h3 class="mb-4 fw-bold text-danger">📊 Dashboard Admin</h3>

    <!-- STATS -->
    <div class="row mb-4">

        <div class="col-md-6">
            <div class="card p-4 text-center">
                <h5>Total Products</h5>
                <h2 class="fw-bold text-danger">{{ $totalProducts }}</h2>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4 text-center">
                <h5>Total Categories</h5>
                <h2 class="fw-bold text-dark">{{ $totalCategories }}</h2>
            </div>
        </div>

    </div>

    <!-- CHART -->
    <div class="card p-4 shadow">
        <h5 class="mb-3">Produk per Kategori</h5>

        <canvas id="chart"></canvas>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('chart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($labels),
        datasets: [{
            label: 'Jumlah Produk',
            data: @json($data),
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});
</script>
@endpush
