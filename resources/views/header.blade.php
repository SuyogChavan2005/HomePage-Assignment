<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="promo-bar">
        FREE delivery & 40% Discount for next 3 orders! Place your 1st order in.
        <span class="sale-timer">Until the end of the sale: 47 days 06 hours 57 minutes 08 sec.</span>
    </div>

    <header class="main-header">
        <div class="top-nav">
            <div class="left-links">
                <a href="#">About Us</a>
                <a href="#">My Account</a>
                <a href="#">Wishlist</a>
                <span class="working-hours">We deliver to you every day from <span class="hours">7:00 to 23:00</span></span>
            </div>
            <div class="right-links">
                <a href="#">English <i class="fa fa-chevron-down"></i></a>
                <a href="#">USD <i class="fa fa-chevron-down"></i></a>
                <a href="#">Order Tracking</a>
            </div>
        </div>
        
        <div class="middle-header">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="JinStore">
                <span>Deliver to all</span>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search for products, categories or brands...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>

            <div class="account-cart">
                <a href="#">Sign In / Account</a>
                <a href="#" class="wishlist-icon"><i class="fa fa-heart"></i></a>
                <a href="#" class="cart-icon"><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>

        <div class="bottom-nav">
            <a href="#">Home <i class="fa fa-chevron-down"></i></a>
            <a href="#">Shop <i class="fa fa-chevron-down"></i></a>
            <a href="#">Fruits & Vegetables <i class="fa fa-chevron-down"></i></a>
            <a href="#">Beverages <i class="fa fa-chevron-down"></i></a>
            <a href="#">Blog <i class="fa fa-chevron-down"></i></a>
            <a href="#">Contact <i class="fa fa-chevron-down"></i></a>
            <span class="trending">Trending Products <i class="fa fa-chevron-down"></i></span>
            <span class="almost-finished">Almost Finished <span class="sale-tag">SALE <i class="fa fa-chevron-down"></i></span></span>
        </div>
    </header>
</body>
</html>
