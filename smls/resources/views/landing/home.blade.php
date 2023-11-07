<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management System</title>
  <link rel="icon" type="image/png" sizes="18x18" href="{{ asset('uploads/Logo/learn_logo.png') }}">
  <link rel="stylesheet" href="{{ asset('Css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Css/navbar/navbar.css') }}">
</head>

<body>
  <nav id="navbar">
    <div class="wrapper">
      <div class="logo"><a href="#"><img src="{{ asset('uploads/Logo/learn_logo.png') }}" alt="Logo" width="90"></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links" style="margin-bottom: 0px !important;">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li>
          <a href="#" class="desktop-item">Mega Menu</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Mega Menu</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-mega-menu-and-dropdown-menu-using-only-html-and-css/img.jpg" alt="">
              </div>
              <div class="row">
                <header>Design Services</header>
                <ul class="mega-links">
                  <li><a href="#">Graphics</a></li>
                  <li><a href="#">Vectors</a></li>
                  <li><a href="#">Business cards</a></li>
                  <li><a href="#">Custom logo</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Email Services</header>
                <ul class="mega-links">
                  <li><a href="#">Personal Email</a></li>
                  <li><a href="#">Business Email</a></li>
                  <li><a href="#">Mobile Email</a></li>
                  <li><a href="#">Web Marketing</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Security services</header>
                <ul class="mega-links">
                  <li><a href="#">Site Seal</a></li>
                  <li><a href="#">VPS Hosting</a></li>
                  <li><a href="#">Privacy Seal</a></li>
                  <li><a href="#">Website design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="{{url('auth')}}">Login / Register</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="{{ asset('uploads/carousel/neom-EbIvcXzgU4s-unsplash.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('uploads/carousel/photo-1682685797769-481b48222adf.avif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('uploads/carousel/photo-1688934150111-ab9a5d327087.avif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('uploads/carousel/waldemar-brandt-aThdSdgx0YM-unsplash_cnq4sb.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Fourth slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="Groww_TrustedByContainer">
    <div class="Groww_TrustedBackgroundImage">
      <img src="{{ asset('uploads/Logo/learn_logo.png') }}" alt="" srcset="">
      <div class="GrowwTrusted_Left">
        <h2 class="GrowwTrusted_Left_Heading">
          Trusted by <br>
          20 million+ users

        </h2>
        <div class="GrowwTrusted_left_Text">
          Our cutting-edge technology ensure that all your information remains
          fully encrypted and secure.
        </div>
      </div>
      <div class="GrowwTrusted_right"></div>
    </div>
  </div>

    
</body>
<script src="{{ asset('Js/bootstrap.bundle.min.js') }}"></script>
<script>
  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

</html>