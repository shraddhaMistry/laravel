@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="card row mt-3 col-lg-6">
        <div class="card-body">
            <h5 class="card-title"><strong>Name:</strong>
                {{ $product->name }}</h5>
            <p class="card-text"><strong>Details:</strong>
                {{ $product->detail }}</p>
        </div>
    </div>
@endsection
