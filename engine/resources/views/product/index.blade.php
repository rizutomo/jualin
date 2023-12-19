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
Phone Shop
@endsection

@section('content')
<header id="header" class="header">

</header>

<main id="main">
    <div class="container">
      <!-- Products Details -->

      <!-- Related Products -->
      <section class="section related__products">
        <div class="title__container">
          <div class="section__title filter-btn active">
            <span class=" dot"></span>
            <h1 class="primary__title">Handphone</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_3">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung5.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone6.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung3.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone4.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
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
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Products -->
      <section class="section latest__products">
        <div class="title__container">
          <div class="section__title filter-btn active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Laptop</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone6.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung5.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone4.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung3.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone2.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/sumsung/samsung1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Samsung Galaxy</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/headphone/headphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Sony WH-CH510</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <a href="#"><img src="{{asset('jualin/images/products/iPhone/iphone1.jpeg')}}" alt="product"></a>
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone XR</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('jualin/images/sprite.svg#icon-star-empty')}}"></use>
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
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('jualin/images/sprite.svg#icon-loop2')}}"></use>
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
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('jualin/images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </div>
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