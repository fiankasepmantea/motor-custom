@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4">

        <div class="d-flex justify-content-between mb-3">
            <h4>Admin Product</h4>
            <a href="{{ route('products.create') }}" class="btn btn-danger">+ Tambah</a>
        </div>

        <table class="table align-middle table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $p)
                <tr>
                    <td>
                        <img src="{{ asset($p->image) }}"
                             style="width:80px; height:60px; object-fit:cover; border-radius:8px;">
                    </td>
                    <td>{{ $p->name }}</td>
                    <td>Rp {{ number_format($p->price) }}</td>
                    <td>
                        <a href="{{ route('products.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <button onclick="confirmDelete({{ $p->id }})" class="btn btn-danger btn-sm">
                            Delete
                        </button>

                        <form id="delete-form-{{ $p->id }}"
                              action="{{ route('products.destroy', $p->id) }}"
                              method="POST" style="display:none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}

    </div>
</div>
@endsection

@push('scripts')
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Product akan dihapus permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#c1121f',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            showLoading('Menghapus...');
            document.getElementById('delete-form-' + id).submit();
        }
    })
}
</script>
@endpush
