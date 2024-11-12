<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Bar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slide-bar.css') }}">
</head>
<body>

    <main>
        <div class="slider" style="
            --width: 150px;
            --height: 200px;
            --quantity: 9;
        ">
            <div class="list">
                <div class="item" style="--position: 1">
                    <img src="{{ asset('images/img1.png') }}" alt="Fruits & Vegetables">
                    <p>Fruits & Vegetables</p>
                </div>
                <div class="item" style="--position: 2">
                    <img src="{{ asset('images/img2.png') }}" alt="Baby & Pregnancy">
                    <p>Baby & Pregnancy</p>
                </div>
                <div class="item" style="--position: 3">
                    <img src="{{ asset('images/img3.png') }}" alt="Beverages">
                    <p>Beverages</p>
                </div>
                <div class="item" style="--position: 4">
                    <img src="{{ asset('images/img4.png') }}" alt="Meats & Seafood">
                    <p>Meats & Seafood</p>
                </div>
                <div class="item" style="--position: 5">
                    <img src="{{ asset('images/img5.png') }}" alt="Biscuits & Snacks">
                    <p>Biscuits & Snacks</p>
                </div>
                <div class="item" style="--position: 6">
                    <img src="{{ asset('images/img6.png') }}" alt="Breads & Bakery">
                    <p>Breads & Bakery</p>
                </div>
                <div class="item" style="--position: 7">
                    <img src="{{ asset('images/img7.png') }}" alt="Breakfast & Dairy">
                    <p>Breakfast & Dairy</p>
                </div>
                <div class="item" style="--position: 8">
                    <img src="{{ asset('images/img8.png') }}" alt="Frozen Foods">
                    <p>Frozen Foods</p>
                </div>
                <div class="item" style="--position: 9">
                    <img src="{{ asset('images/img9.png') }}" alt="Grocery & Staples">
                    <p>Grocery & Staples</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
