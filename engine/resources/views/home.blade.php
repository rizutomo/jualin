@extends('master')


@push('additional-css')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />


<!-- Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
  ">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- Custom StyleSheet -->
<link rel="stylesheet" href="css/styles.css" />
@endpush

@section('title')
Jualin Shop
@endsection

@section('content')
<!-- Header -->
<header id="header" class="header">
  <!-- Hero -->
  <div class="hero">
    <div class="glide" id="glide_1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="hero__center">
              <div class="hero__left">
                <span class="">New Inspiration 2020</span>
                <h1 class="">PHONES MADE FOR YOU!</h1>
                <p>Trending from mobile and headphone style collection</p>
                <a href="#"><button class="hero__btn">SHOP NOW</button></a>
              </div>
              <div class="hero__right">
                <div class="hero__img-container">
                  <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                </div>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="hero__center">
              <div class="hero__left">
                <span>New Inspiration 2020</span>
                <h1>PHONES MADE FOR YOU!</h1>
                <p>Trending from mobile and headphone style collection</p>
                <a href="#"><button class="hero__btn">SHOP NOW</button></a>
              </div>
              <div class="hero__right">
                <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg>
            <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg>
            <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="shopping-cart">
    <div class="box">
      <i class="fas fa-trash"></i>
      <img src="images/products/iPhone/iphone1.jpeg">
      <div class="content">
        <h3>iPhone</h3>
        <span class="price">$800.99/-</span>
        <span class="quantity">qty : 1</span>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-trash"></i>
      <img src="images/products/sumsung/samsung3.jpeg">
      <div class="content">
        <h3>Samsung A22</h3>
        <span class="price">$350.99/-</span>
        <span class="quantity">qty : 1</span>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-trash"></i>
      <img src="images/products/headphone/headphone3.jpeg">
      <div class="content">
        <h3>Boat</h3>
        <span class="price">$54.99/-</span>
        <span class="quantity">qty : 1</span>
      </div>
    </div>
    <div class="total">Total : $1354.69/-</div>
    <a href="#" class="btn">Check out</a>
  </div>

</header>
<!-- End Header -->

<!-- Main -->
<main id="main">
  <div class="container">
    <!-- Collection -->
    <section id="collection" class="section collection">
      <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
        <div class="collection__box">
          <div class="img__container">
            <img class="collection_02" src="./images/collection_02.png" alt="">
          </div>
          <div class="collection__content">
            <div class="collection__data">
              <span>New Colors Introduced</span>
              <h1>HEADPHONES</h1>
              <a href="#shop">SHOP NOW</a>
            </div>
          </div>
        </div>
        <div class="collection__box">
          <div class="img__container">
            <img class="collection_01" src="./images/collection_01.png" alt="">
          </div>
          <div class="collection__content">
            <div class="collection__data">
              <span>Phone Device Presets</span>
              <h1>SMARTPHONES</h1>
              <a href="#">SHOP NOW</a>
            </div>
          </div>
        </div>
    </section>

    <!-- Latest Products -->
    <section class="section latest__products" id="latest">
      <div class="title__container">
        <div class="section__title active" data-id="Latest Products">
          <span class="dot"></span>
          <h1 class="primary__title">Latest Products</h1>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-duration="1200">
        <div class="glide" id="glide_2">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides latest-center">
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="/images/products/iPhone/iphone6.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Apple iPhone 11</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$750</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="/images/products/sumsung/samsung5.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Samsung Galaxy</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$900</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="/images/products/headphone/headphone4.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Sony WH-CH510</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$600</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="/images/products/sumsung/samsung3.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Samsung Galaxy</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$850</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="./images/products/iPhone/iphone2.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Apple iPhone 11</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$450</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="images/products/headphone/headphone2.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Sony WH-CH510</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$300</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="images/products/sumsung/samsung1.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Samsung Galaxy</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$300</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="images/products/headphone/headphone1.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Sony WH-CH510</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$250</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="glide__slide">
                <div class="product">
                  <div class="product__header">
                    <img src="images/products/iPhone/iphone1.jpeg" alt="product">
                  </div>
                  <div class="product__footer">
                    <h3>Apple iPhone XR</h3>
                    <div class="rating">
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                      </svg>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                      </svg>
                    </div>
                    <div class="product__price">
                      <h4>$550</h4>
                    </div>
                    <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                  </div>
                  <ul>
                    <li>
                      <a data-tip="Quick View" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-eye"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Wishlist" data-place="left" href="#">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a data-tip="Add To Compare" data-place="left" href="#">
                        <svg>
                          <use xlink:href="images/sprite.svg#icon-loop2"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>

            </ul>
          </div>

          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
              </svg>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- Facility Section -->
  </div>

</main>
<!-- End Main -->

<!-- Go To -->
<a href="#header" class="goto-top scroll-link">
  <svg>
    <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
  </svg>
</a>
@endsection





@push('additional-js')
<!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<!-- Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JavaScript -->
<script src="js/products.js"></script>
<script src="js/index.js"></script>
<script src="js/slider.js"></script>
@endpush