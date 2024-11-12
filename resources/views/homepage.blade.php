<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header Section -->
    @include('header')

   <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <img src="{{ asset('images/banner.png') }}" alt="Banner Image" class="banner-image">
        </div>
    </section>

    <!-- Slide Bar Section -->
    @include('slide-bar')

    <!-- Editor's Pick Section -->
    @include('editors-pick')

    <!-- Category Product Section -->
    @include('category-product')

    <!-- Best Seller Section -->
    @include('best-seller')
    
    <!-- Our News Section -->
    @include('our-news')

    <!-- Footer -->
    @include('footer')
</body>
</html>