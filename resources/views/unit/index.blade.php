@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Unit</h1>
    <a href="{{ route('unit.create') }}" class="btn btn-success mb-3">Tambah Unit</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($units as $unit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $unit->name }}</td>
                <td>{{ $unit->deskripsi }}</td>
                <td>
                    <a href="{{ route('unit.edit', $unit->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('unit.destroy', $unit->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
