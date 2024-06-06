
<header id="header" class=" content-light ">
    <div class="header-wrap container py-3">
      <div class="row align-items-center">
        <div class="primary-nav col-md-5 col-sm-2">
          <nav class="navbar">
            <div class="main-menu">
              <ul class="menu-list  list-unstyled d-flex m-0 ">
              <li class="menu-itemhome1">
                  <a href="{{ route('home') }}" class="text-uppercase item-anchor">Home</a>
                </li>
                <li class="menu-itemhome1">
                  <a href="{{ route('category') }}" class="text-uppercase item-anchor">Category</a>
                </li>
                <li class="menu-itemhome1">
                  <a href="{{ route('product') }}" class="text-uppercase item-anchor">Product</a>
                </li>
              </ul>
              <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-md-2 col-sm-4 brand-block ">
          <div class="main-logo text-lg-center">
            <a href="{{ route('home') }}">
              <img src="asetss/images/main-logo.png" alt="logo" class="brand-image">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="billboard" class="padding-large no-padding-top position-relative">
    <div class="image-holder">
      <img src="asetss/images/banner-image.jpg" alt="banner" class="banner-image">
    </div>
    <div class="banner-content content-light style1 text-center col-md-6">
      <h2 class="banner-title">
        Make your fashion look swanky.
      </h2>
    </div>
  </section>
  <section id="company-services">
    <div class="container my-5">
      <div class="row">
        <div class="icon-box-wrapper d-flex flex-wrap justify-content-between">
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-shipping"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Quick delivery</h3>
                <p>Inside City delivery within 5 days</p>
              </div>
            </div>
          </div>
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-store"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Pick up in store</h3>
                <p>We have option of pick up in store.</p>
              </div>
            </div>
          </div>
          <div class="icon-box text-center col-md-3 col-sm-12">
            <div class="content-box border-top border-bottom">
              <div class="icon-box-icon">
                <i class="icon icon-package"></i>
              </div>
              <div class="icon-content">
                <h3 class="no-margin">Special packaging</h3>
                <p>Our packaging is best for products.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


