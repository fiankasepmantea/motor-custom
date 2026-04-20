@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h4 class="mb-4">Tambah Product</h4>

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" onsubmit="handleSubmit(this)">
            @csrf

            <input type="text" name="name" class="form-control mb-3" placeholder="Nama" required>

            <textarea name="description" class="form-control mb-3" placeholder="Deskripsi"></textarea>

            <input type="number" name="price" class="form-control mb-3" placeholder="Harga" required>

            <select name="category_id" class="form-control mb-3">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            <input type="file" name="image" class="form-control mb-3" required>

            <button type="submit" class="btn btn-danger w-100" id="btnSave">Save</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
function handleSubmit(form) {
    showLoading('Menyimpan...');
    document.getElementById('btnSave').disabled = true; // prevent double submit
}
</script>
@endpush
