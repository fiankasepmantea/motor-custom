@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Tambah Product</h2>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Nama">

        <textarea name="description" class="form-control mb-2"></textarea>

        <input type="number" name="price" class="form-control mb-2">

        <select name="category_id" class="form-control mb-2">
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

        <input type="file" name="image" class="form-control mb-2">

        <button class="btn btn-danger">Save</button>
    </form>
</div>
@endsection
