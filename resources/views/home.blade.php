@extends('layouts.app')

@section('content')

<!-- HERO -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/1200x400?text=Motor+Custom" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/1200x400?text=Custom+Bike" class="d-block w-100">
    </div>
  </div>
</div>

<!-- SEARCH + FILTER -->
<div class="container mt-5">

  <h2 class="text-center primary mb-4">Custom Motor</h2>

  <div class="row mb-3">
    <div class="col-md-6">
      <input type="text" id="search" class="form-control" placeholder="Search motor...">
    </div>

    <div class="col-md-6">
      <select id="category" class="form-control">
        <option value="">All Category</option>
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div id="product-list">
    @include('partials.products')
  </div>

</div>

<!-- CATEGORY LIST -->
<div class="container mt-5">
  <h2 class="text-center primary">Categories</h2>
  <div class="row text-center">
    @foreach($categories as $cat)
    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <h5>{{ $cat->name }}</h5>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3 mt-5">
  <p>© 2026 Motor Custom</p>
</footer>

<!-- AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function fetchProducts(url = "/products/search") {
    let keyword = $('#search').val();
    let category = $('#category').val();

    $.ajax({
        url: url,
        type: "GET",
        data: {
            keyword: keyword,
            category_id: category
        },
        success: function(data) {
            $('#product-list').html(data);
        }
    });
}

// SEARCH
$('#search').on('keyup', function() {
    fetchProducts();
});

// FILTER
$('#category').on('change', function() {
    fetchProducts();
});

// PAGINATION AJAX
$(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    let url = $(this).attr('href');
    fetchProducts(url);
});
</script>

@endsection
