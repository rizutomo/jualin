<div class="navigation">
        <div class="container">
          <nav class="nav">
            <div class="nav__hamburger">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-menu"></use>
              </svg>
            </div>
  
            <div class="nav__logo">
              <a href="/" class="scroll-link">
                PHONE
              </a>
            </div>
  
            <div class="nav__menu">
              <div class="menu__top">
                <span class="nav__category">PHONE</span>
                <a href="#" class="close__toggle">
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-cross"></use>
                  </svg>
                </a>
              </div>
              <ul class="nav__list">
                <li class="nav__item">
                  <a href="{{ route('home.index') }}" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                  <a href="{{ route('product.index') }}" class="nav__link">Products</a>
                </li>
                <li class="nav__item">
                  <a href="{{ route('cart.index') }}" class="nav__link">Cart</a>
                </li>
              </ul>
            </div>
  
            <div class="nav__icons">
              <a href="user.html" class="icon__item" id="login-btn">
                <svg class="icon__user">
                  <use xlink:href="./images/sprite.svg#icon-user"></use>
                </svg>
              </a>
  
              <a href="#" class="icon__item" id="search-btn">
                <svg class="icon__search">
                  <use xlink:href="./images/sprite.svg#icon-search"></use>
                </svg>
              </a>
  
              <a href="{{ route('cart.index') }}" class="icon__item" id="cart-btn">
                <svg class="icon__cart">
                  <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                </svg>
                <span id="cart__total">3</span>
              </a>
            </div>
          </nav>
        </div>
      </div>