@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4">

        <h4 class="mb-4 fw-bold text-danger">Edit Product</h4>

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
                <img src="{{ asset($product->image) }}" style="width:120px; height:80px; object-fit:cover; border-radius:8px;">
            </div>

            <input type="file" name="image" class="form-control mb-3" onchange="previewImage(event)">

            <img id="preview" style="width:120px; display:none; margin-top:10px;">
            
            <button id="btnUpdate" class="btn btn-danger w-100">Update</button>
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
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endpush
