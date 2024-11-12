<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Seller</title>
    <link rel="stylesheet" href="{{ asset('css/best-seller.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <section class="best-sellers">
        <div class="container">
            <h2>Best Sellers</h2>
            <p>Don't miss this opportunity at a special discount just for this week.</p>
            <div class="bestsellers-grid">
                <div class="product-item">
                    <div class="discount-badge">75%</div>
                    <img src="{{ asset('images/apple-juice.png') }}" alt="100 Percent Apple Juice">
                    <h3>100 Percent Apple Juice - 64 fl oz Bottle</h3>
                    <p><span class="price">$0.50</span> <span class="original-price">$1.99</span></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-item">
                    <div class="discount-badge">41%</div>
                    <img src="{{ asset('images/simply-orange.png') }}" alt="Simply Orange Pulp Free Juice">
                    <h3>Simply Orange Pulp Free Juice – 52 fl oz</h3>
                    <p><span class="price">$2.45</span> <span class="original-price">$4.13</span></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-item">
                    <div class="discount-badge">45%</div>
                    <img src="{{ asset('images/vitaminwater.png') }}" alt="Vitaminwater zero sugar squeezed electrolyte...">
                    <h3>Vitaminwater zero sugar squeezed electrolyte...</h3>
                    <p><span class="price">$4.99</span> <span class="original-price">$8.99</span></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-main">
                    <div class="discount-badge">31%</div>
                    <img src="{{ asset('images/absolut.png') }}" alt="Absolut Grapefruit Paloma Sparkling Vodka Cocktail – 4pk, 355ml" class="one">
                    <h3>Absolut Grapefruit Paloma Sparkling Vodka Cocktail – 4pk, 355ml</h3>
                    <p><span class="price">$6.99</span> <span class="original-price">$9.99</span></p>
                    <p>This product is about to run out</p>
                    <p>Available only: <strong>38</strong></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-item">
                    <div class="discount-badge">17%</div>
                    <img src="{{ asset('images/evolve.png') }}" alt="Real Plant-Powered Protein Shake – Double Chocolate...">
                    <h3>Real Plant-Powered Protein Shake – Double Chocolate...</h3>
                    <p><span class="price">$14.89</span> <span class="original-price">$17.88</span></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-item">
                    <div class="discount-badge">31%</div>
                    <img src="{{ asset('images/absolut.png') }}" alt="Absolut Grapefruit Paloma Sparkling Vodka Cocktail – 4pk, 355ml">
                    <h3>Absolut Grapefruit Paloma Sparkling Vodka Cocktail – 4pk, 355ml</h3>
                    <p><span class="price">$6.99</span> <span class="original-price">$9.99</span></p>
                    <button>Add to cart</button>
                </div>
                <div class="product-item">
                    <div class="discount-badge">45%</div>
                    <img src="{{ asset('images/evolve.png') }}" alt="Real Plant-Powered Protein Shake – Double Chocolate...">
                    <h3>Vitaminwater zero sugar squeezed electrolyte...</h3>
                    <p><span class="price">$4.99</span> <span class="original-price">$8.99</span></p>
                    <button>Add to cart</button>
                </div>
            </div>
            <section class="footer1-banner">
                <div class="container">
                    <img src="{{ asset('images/banner1-footer.png') }}" alt="FooterBannerImage" class="footer1-banner-image">
                </div>
            </section>
        </div>
    </section>
</body>
</html>
