<div class="row">

@forelse($products as $product)

  <div class="col-md-4 mb-4">
    <div class="card shadow h-100">

      <img
        src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/300x200?text=No+Image' }}"
        alt="{{ $product->name }}"
        class="card-img-top"
        style="height:220px; object-fit:cover;"
        loading="lazy"
      >

      <div class="card-body d-flex flex-column">
        <h5 class="fw-bold">{{ $product->name }}</h5>

        <p class="text-muted small flex-grow-1">
          {{ Str::limit($product->description, 80) }}
        </p>

        <strong class="text-danger fs-5">
          Rp {{ number_format($product->price) }}
        </strong>
      </div>

    </div>
  </div>

@empty

  <div class="col-12">
    <div class="text-center py-5 fade-in">

        <img
            src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png"
            alt="No Product"
            style="width:120px; opacity:0.6;"
            class="mb-3"
        >

        <h5 class="fw-bold text-danger">Product Not Found</h5>

        <p class="text-muted">
            Produk yang kamu cari tidak tersedia atau belum ditambahkan.
        </p>

        <button onclick="resetFilter()" class="btn btn-outline-danger mt-2">
            Reset Filter
        </button>

    </div>
  </div>

@endforelse

</div>

@if($products->hasPages())
<div class="d-flex justify-content-center mt-3">
  {{ $products->links() }}
</div>
@endif
