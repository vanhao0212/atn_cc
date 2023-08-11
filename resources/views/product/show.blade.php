@extends('product.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Product</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('image/product/'.$product->image) }}" alt="" class="img-fluid product-image">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>Price:</strong> {{ $product->price }}</p>
                    <p><strong>Category:</strong> {{ $product->category->name }}</p>
                    <p><strong>Details:</strong> {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .product-image {
        max-width: 200px;
    }

    .container {
        margin-top: 30px
    }

    .card-body {
        margin-left: 10px
    }
</style>
@endsection
