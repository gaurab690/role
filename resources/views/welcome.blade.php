@extends('layouts.master')
@section('section')

<!DOCTYPE html>
<html lang="en">

<body>


    <!-- Hero Section -->
    <div class="hero-section">
        <div>
            <h1>Welcome to Ganga Cosmetic</h1>
            <p>Your one-stop solution for all beauty and skincare needs</p>
            <a href="#products" class="btn btn-light">Shop Now</a>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container my-5" id="products">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="product1.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Lipstick</h5>
                        <p class="card-text">Bright and bold shades for every occasion.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="product2.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Moisturizer</h5>
                        <p class="card-text">Keep your skin hydrated and glowing.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="product3.jpg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Eyeliner</h5>
                        <p class="card-text">Perfect for creating sharp and smooth lines.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection()