@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Admin Product</h2>

    <a href="{{ route('products.create') }}" class="btn btn-danger mb-3">Tambah</a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        @foreach($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->price }}</td>
            <td>
                <a href="{{ route('products.edit', $p->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
