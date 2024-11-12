<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Product</title>
    <link rel="stylesheet" href="{{ asset('css/category-product.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<section class="category-products">
    <div class="container">
        <h2>Category Products</h2>
        <p>Do not miss the current offers until the end of March.</p>

        <section class="header-banner">
            <div class="container">
                <img src="{{ asset('images/banner-header.png') }}" alt="header Banner Image" class="header-banner-image">
            </div>
        </section>

        <div class="products-grid">
            <div class="product-item">
                <div class="discount-badge">11%</div>
                <img src="{{ asset('images/pizza1.png') }}" alt="Great Value Rising Crust Pizza">
                <h3>Great Value Rising Crust Pizza, Supreme</h3>
                <p class="price"><span class="old-price">$9.99</span> $8.89</p>
                <p class="status">In Stock</p>
            </div>

            <div class="product-item">
                <div class="discount-badge">13%</div>
                <img src="{{ asset('images/strawberries.png') }}" alt="Simple Kitchen FD Sliced Strawberries">
                <h3>Simple Kitchen FD Sliced Strawberries - 1.08lb</h3>
                <p class="price"><span class="old-price">$24.99</span> $21.90</p>
                <p class="status">In Stock</p>
            </div>

            <div class="product-item">
                <div class="discount-badge">26%</div>
                <img src="{{ asset('images/pizza2.png') }}" alt="Red Baron Frozen Hand Tossed Pizza">
                <h3>Red Baron Frozen Hand Tossed Ultimate Pepperoni Pizza</h3>
                <p class="price"><span class="old-price">$19.89</span> $14.99</p>
                <p class="status">In Stock</p>
            </div>

            <div class="product-item">
                <div class="discount-badge">8%</div>
                <img src="{{ asset('images/scrambler.png') }}" alt="Oscar Mayer Ham & Swiss Scrambler">
                <h3>Oscar Mayer Ham & Swiss Scrambler - 3oz</h3>
                <p class="price"><span class="old-price">$12.90</span> $11.90</p>
                <p class="status">In Stock</p>
            </div>

            <div class="product-item">
                <div class="discount-badge">16%</div>
                <img src="{{ asset('images/tortillas.png') }}" alt="Large Garden Spinach & Herb Wraps">
                <h3>Large Garden Spinach & Herb Wrap Tortillas - 15oz, 6ct</h3>
                <p class="price"><span class="old-price">$32.90</span> $27.90</p>
                <p class="status">In Stock</p>
            </div>

            <div class="product-item hidden">
                <div class="discount-badge">14%</div>
                <img src="{{ asset('images/cheese-pizza.png') }}" alt="Great Value Rising Crust Pizza, Cheese">
                <h3>Great Value Rising Crust Pizza, Cheese, 27.4 oz</h3>
                <p class="price"><span class="old-price">$14.89</span> $12.89</p>
                <p class="status">In Stock</p>
            </div>
        </div>

        <button id="viewAllBtn" onclick="toggleProducts()">View All</button>
    </div>
</section>

<section class="footer-banner">
    <div class="container">
        <img src="{{ asset('images/banner-footer.png') }}" alt="Footer Banner Image" class="footer-banner-image">
    </div>
</section>

<script>
    function toggleProducts() {
        const hiddenItems = document.querySelectorAll('.product-item.hidden');
        const viewAllBtn = document.getElementById('viewAllBtn');
        hiddenItems.forEach(item => {
            item.classList.toggle('visible');
        });
        viewAllBtn.textContent = viewAllBtn.textContent === "View All" ? "View Less" : "View All";
    }
</script>

<style>
    .product-item.hidden {
        display: none;
    }
    .product-item.hidden.visible {
        display: block;
    }

    #viewAllBtn {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #808080;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #viewAllBtn:hover {
        background-color: #666666;
    }
</style>

</body>
</html>
