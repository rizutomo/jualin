@extends('master')

@push('additional-css')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

<!-- Carousel -->
<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css" />
<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css" />

<!-- Animate On Scroll -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<!-- Custom StyleSheet -->
<link rel="stylesheet" href="css/styles.css" />
@endpush

@section('title')
Jualin
@endsection

@section('content')
<header id="header" class="header">

</header>

<main id="main">
    <section class="section cart__area">
        <div class="container">
            <div class="responsive__cart-area">
                <form class="cart__form">
                    <div class="cart__table table-responsive">
                        <table width="100%" class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>NAME</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./images/products/iPhone/iphone6.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="input-counter">
                                        <div>
                                            <span class="minus-btn" onclick="decrementValue(this)">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" min="1" value="1" max="10" class="counter-btn" oninput="updateTotal()">
                                            <span class="plus-btn" onclick="incrementValue(this)">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price" id="totalPrice">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg>
                                                <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./images/products/sumsung/samsung5.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg>
                                                <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./images/products/sumsung/samsung2.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg>
                                                <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./images/products/iPhone/iphone4.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg>
                                                        <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg>
                                                <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-btns">
                        <div class="continue__shopping">
                            <a href="/">Continue Shopping</a>
                        </div>
                        <div class="check__shipping">
                            <input type="checkbox">
                            <span>Shipping(+7$)</span>
                        </div>
                    </div>

                    <div class="cart__totals">
                        <h3>Cart Totals</h3>
                        <ul>
                            <li>
                                Subtotal
                                <span class="new__price">$250.99</span>
                            </li>
                            <li>
                                Shipping
                                <span>$0</span>
                            </li>
                            <li>
                                Total
                                <span class="new__price">$250.99</span>
                            </li>
                        </ul>
                        <a href="">PROCEED TO CHECKOUT</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
        <div class="container">
            <div class="facility__contianer">
                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-airplane"></use>
                        </svg>
                    </div>
                    <p>FREE SHIPPING WORLD WIDE</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
                        </svg>
                    </div>
                    <p>100% MONEY BACK GUARANTEE</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                        </svg>
                    </div>
                    <p>MANY PAYMENT GATWAYS</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./images/sprite.svg#icon-headphones"></use>
                        </svg>
                    </div>
                    <p>24/7 ONLINE SUPPORT</p>
                </div>
            </div>
        </div>
    </section>
</main>



<!-- Go To -->

<a href="#header" class="goto-top scroll-link">
    <svg>
        <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
    </svg>
</a>
@endsection

@push('additional-js')
<!-- Glide Carousel Script -->
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<!-- Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JavaScript -->
<script src="./js/products.js"></script>
<script src="./js/index.js"></script>
<script src="./js/slider.js"></script>
<script>
    function decrementValue(element) {
        var inputElement = element.nextElementSibling;
        var currentValue = parseInt(inputElement.value, 10);

        if (currentValue > 1) {
            inputElement.value = currentValue - 1;
            updateTotal();
        }
    }

    function incrementValue(element) {
        var inputElement = element.previousElementSibling;
        var currentValue = parseInt(inputElement.value, 10);
        var maxValue = parseInt(inputElement.getAttribute('max'), 10);

        if (currentValue < maxValue) {
            inputElement.value = currentValue + 1;
            updateTotal();
        }
    }

    function updateTotal() {
        var quantityInput = document.querySelector('.counter-btn');
        var totalPriceElement = document.getElementById('totalPrice');
        var unitPrice = 250.99; // Replace with the actual unit price

        var quantity = parseInt(quantityInput.value, 10);
        var total = unitPrice * quantity;

        totalPriceElement.textContent = '$' + total.toFixed(2);
    }
</script>
@endpush