<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Pick</title>
    <link rel="stylesheet" href="{{ asset('css/editor-pick.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <section class="editors-pick">
        <div class="container">
            <h2>Editor's Pick <span class="subtitle">New products with updated stocks.</span></h2>
            <a href="javascript:void(0);" class="view-all" onclick="viewAllProducts()">View All →</a>
            <div class="products-grid">
                <div class="product-card">
                    <div class="discount-badge">75%</div>
                    <img src="{{ asset('images/product1.png') }}" alt="100 Percent Apple Juice" class="product-image">
                    <div class="product-info">
                        <span class="label organic">ORGANIC</span>
                        <p class="product-name">100 Percent Apple Juice – 64 fl oz Bottle</p>
                        <div class="rating">★★★☆☆ <span>(3)</span></div>
                        <div class="price-section">
                            <p class="current-price">$0.50</p>
                            <p class="original-price">$1.99</p>
                        </div>
                        <p class="availability-warning">This product is about to run out</p>
                        <p class="availability-count">Available only: <span>23</span></p>
                        <button class="add-to-cart">Add to cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="discount-badge">11%</div>
                    <img src="{{ asset('images/product2.png') }}" alt="Great Value Rising Crust Pizza" class="product-image">
                    <div class="product-info">
                        <span class="label cold-sale">COLD SALE</span>
                        <p class="product-name">Great Value Rising Crust Frozen Pizza, Supreme</p>
                        <div class="rating">★★★☆☆ <span>(3)</span></div>
                        <div class="price-section">
                            <p class="current-price">$8.99</p>
                            <p class="original-price">$9.99</p>
                        </div>
                        <button class="add-to-cart">Add to cart</button>
                        <div class="timer">87 : 06 : 57 : 08</div>
                        <p class="offer-expiry">Remains until the end of the offer</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="discount-badge">41%</div>
                    <img src="{{ asset('images/product3.png') }}" alt="Simply Orange Juice" class="product-image">
                    <div class="product-info">
                        <p class="product-name">Simply Orange Pulp Free Juice – 52 fl oz</p>
                        <div class="rating">★★★☆☆ <span>(2)</span></div>
                        <div class="price-section">
                            <p class="current-price">$2.45</p>
                            <p class="original-price">$4.13</p>
                        </div>
                        <button class="add-to-cart">Add to cart</button>
                        <div class="timer">68 : 06 : 57 : 08</div>
                        <p class="offer-expiry">Remains until the end of the offer</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="discount-badge">21%</div>
                    <img src="{{ asset('images/product4.png') }}" alt="California Pizza Kitchen" class="product-image">
                    <div class="product-info">
                        <span class="label cold-sale">COLD SALE</span>
                        <p class="product-name">California Pizza Kitchen Margherita, Crispy Thin Crust</p>
                        <div class="rating">★★★★☆ <span>(3)</span></div>
                        <div class="price-section">
                            <p class="current-price">$11.77</p>
                            <p class="original-price">$14.77</p>
                        </div>
                        <p class="availability-warning">This product is about to run out</p>
                        <p class="availability-count">Available only: <span>19</span></p>
                        <button class="add-to-cart">Add to cart</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="discount-badge">59%</div>
                    <img src="{{ asset('images/product5.png') }}" alt="Cantaloupe Melon Fresh Organic Cut" class="product-image">
                    <div class="product-info">
                        <span class="label organic">ORGANIC</span>
                        <p class="product-name">Cantaloupe Melon Fresh Organic Cut</p>
                        <div class="rating">★★★☆☆ <span>(3)</span></div>
                        <div class="price-section">
                            <p class="current-price">$1.25</p>
                            <p class="original-price">$2.98</p>
                        </div>
                        <button class="add-to-cart">Add to cart</button>
                        <div class="timer">86 : 06 : 57 : 08</div>
                        <p class="offer-expiry">Remains until the end of the offer</p>
                    </div>
                </div> 

                <div class="additional-products">
                    <div class="product-card">
                        <div class="discount-badge">18%</div>
                        <img src="{{ asset('images/product6.png') }}" alt="Angel Soft Toilet Paper, 9 Mega Rolls" class="product-image">
                        <div class="product-info">
                            <span class="label mega-roll">MEGA ROLLS</span>
                            <p class="product-name">Angel Soft Toilet Paper, 9 Mega Rolls</p>
                            <div class="rating">★★★☆☆ <span>(3)</span></div>
                            <div class="price-section">
                                <p class="current-price">$14.12</p>
                                <p class="original-price">$17.12</p>
                            </div>
                            <button class="add-to-cart">Add to cart</button>
                            <div class="timer">88 : 06 : 57 : 08</div>
                            <p class="offer-expiry">Remains until the end of the offer</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script>
        function viewAllProducts() {
            document.querySelector('.additional-products').style.display = 'block';
            document.querySelector('.view-all').style.display = 'none';
        }
    </script>

</body>
</html>
