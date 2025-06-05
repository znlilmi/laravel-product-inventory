@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Categories</h1>
    
    {{-- Pembungkus Card --}}
    <div class="card mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
            <div class="d-flex align-items-center"> {{-- Menggunakan d-flex dan align-items-center untuk perataan --}}
                <a href="{{ route('categories.create') }}" class="btn btn-success me-2">Add Category</a> {{-- me-2 untuk margin kanan --}}
                <a href="{{ route('printcategory') }}" class="btn btn-warning">
                    <i class="fas fa-download fa-sm text-white-50"></i> Cetak PDF Kategori
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive"> {{-- Menambahkan div table-responsive untuk tampilan yang lebih baik di perangkat kecil --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $cat) {{-- Menggunakan @forelse untuk menangani kasus data kosong --}}
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data kategori.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection