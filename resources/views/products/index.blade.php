<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>

    <!-- CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #ff6f00;
        }

        .navbar a {
            color: white !important;
        }

        .footer {
            background-color: #ff6f00;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .product-card {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Productos</h2>
        <div class="row">
            @php
            $products = [
            ['name' => 'Camiseta Deportiva', 'category' => 'Ropa', 'price' => 25.99, 'image' => 'camiseta.jpg'],
            ['name' => 'Zapatillas Running', 'category' => 'Calzado', 'price' => 59.99, 'image' => 'zapatillas.jpg'],
            ['name' => 'Reloj Inteligente', 'category' => 'Tecnología', 'price' => 99.99, 'image' => 'reloj.jpg'],
            ['name' => 'Mochila Escolar', 'category' => 'Accesorios', 'price' => 35.50, 'image' => 'mochila.jpg'],
            ['name' => 'Auriculares Bluetooth', 'category' => 'Electrónica', 'price' => 45.00, 'image' =>
            'auriculares.jpg'],
            ['name' => 'Chaqueta Impermeable', 'category' => 'Ropa', 'price' => 79.99, 'image' => 'chaqueta.jpg']
            ];
            @endphp

            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top"
                        alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text"><strong>Categoría:</strong> {{ $product['category'] }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ number_format($product['price'], 2) }}</p>
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning w-100">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <p>&copy; 2025 Mi Proyecto. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>