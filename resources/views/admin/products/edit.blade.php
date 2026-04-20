@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Product</h2>

    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2">

        <textarea name="description" class="form-control mb-2">{{ $product->description }}</textarea>

        <input type="number" name="price" value="{{ $product->price }}" class="form-control mb-2">

        <select name="category_id" class="form-control mb-2">
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
            @endforeach
        </select>

        <input type="file" name="image" class="form-control mb-2">

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
