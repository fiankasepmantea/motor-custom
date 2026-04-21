@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4">

        <h4 class="mb-4 fw-bold text-danger">Tambah Product</h4>

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" onsubmit="handleSubmit()">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
            
                <input type="file" name="image" class="form-control mb-3" onchange="previewImage(event)">

                <img id="preview" style="width:120px; display:none; margin-top:10px;">
            </div>

            <button id="btnSave" class="btn btn-danger w-100 fw-bold">Save Product</button>
        </form>

    </div>
</div>
@endsection

@push('scripts')
<script>
function handleSubmit() {
    showLoading('Menyimpan...');
    document.getElementById('btnSave').disabled = true;
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
