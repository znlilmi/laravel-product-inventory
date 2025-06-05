@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Product Detail</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
        <li class="breadcrumb-item active">Show</li>
    </ol>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body text-center">
                    <img src="{{ asset('/storage/products/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->title }}">
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->title }}</h3>
                    <hr>
                    <h5 class="text-muted">Price: Rp {{ number_format($product->price, 2, ',', '.') }}</h5>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    <hr>
                    <div>
                        <h6>Description:</h6>
                        <div>{!! $product->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
