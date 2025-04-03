@extends('layout.app')

@section('content')
    <!-- Contenido -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $product->url_image }}">
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <p><strong>Categoría:</strong> {{ $product->category_id }}</p>
                    <p><strong>Descripción:</strong> {{ $product->description }}</p>
                    <h4 class="text-danger">{{ $product->price }}</h4>
                    <button class="btn btn-warning w-100 mt-3">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
