@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h4 class="mb-4">Edit Product</h4>

        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" onsubmit="handleSubmitEdit()">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-3">

            <textarea name="description" class="form-control mb-3">{{ $product->description }}</textarea>

            <input type="number" name="price" value="{{ $product->price }}" class="form-control mb-3">

            <select name="category_id" class="form-control mb-3">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
                @endforeach
            </select>

            <div class="mb-3">
                <label>Gambar Lama</label><br>
                <img src="{{ asset($product->image) }}" width="120">
            </div>

            <input type="file" name="image" class="form-control mb-3">

            <button type="submit" class="btn btn-danger w-100" id="btnUpdate">Update</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
function handleSubmitEdit() {
    showLoading('Updating...');
    document.getElementById('btnUpdate').disabled = true;
}
</script>
@endpush
