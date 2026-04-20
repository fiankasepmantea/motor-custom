<div class="row">
  @forelse($products as $product)
  <div class="col-md-4 mb-4">
    <div class="card shadow">
      <img src="{{ asset($product->image) }}">
      <div class="card-body">
        <h5>{{ $product->name }}</h5>
        <p>{{ $product->description }}</p>
        <strong>Rp {{ number_format($product->price) }}</strong>
      </div>
    </div>
  </div>
  @empty
  <p class="text-center">Product not found</p>
  @endforelse
</div>

<div class="d-flex justify-content-center">
  {{ $products->links() }}
</div>
