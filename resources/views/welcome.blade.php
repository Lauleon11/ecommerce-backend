@extends('layout.app')
@section('content')
    <!-- Slider -->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a Mi Proyecto</h5>
                    <p>Explora nuestras categorías y descubre contenido increíble.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ofrecemos lo mejor</h5>
                    <p>Conoce lo que tenemos para ti.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Categorías -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/ropa.jpg') }}" alt="Ropa">
                    <h3>Categoría Ropa</h3>
                    <p>Descubre los productos más populares en esta categoría.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/zapatos.jpg') }}" alt="Zapatos">
                    <h3>Zapatos</h3>
                    <p>Una selección variada para todos los gustos y necesidades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-box">
                    <img src="{{ asset('images/accesorios.jpg') }}" alt="Accesorios">
                    <h3>Accesorios</h3>
                    <p>Encuentra lo mejor en esta categoría, ideal para ti.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection