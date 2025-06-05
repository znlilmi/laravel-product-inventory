<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">{{ $title }}</h1>
    <p style="text-align: center;">Tanggal Cetak: {{ $date }}</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                {{-- Tambahkan kolom lain sesuai dengan model Product Anda --}}
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td> {{-- Sesuaikan dengan nama kolom di tabel produk Anda --}}
                <td>{{ $product->price }}</td> {{-- Contoh, sesuaikan dengan kolom Anda --}}
            </tr>
            @empty
            <tr>
                <td colspan="3">Tidak ada data produk.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>