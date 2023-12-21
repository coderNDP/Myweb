<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load Jquery lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script defer src="/js/bootstrap.bundle.min.js"></script>
    <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
           <li><img src="/img/logo-1.png" alt="" width="70px" height="70px"></li>
          <li><a href="{{route ('Customer.index') }}" class="nav-link px-2 text-secondary">Home</a></li>
          <li class="menu"><a href="#" class="nav-link px-2 text-white">Categories</a>
              <ul class="sup-menu">
                <li><a href="{{ route('customer.men-shoe') }}">Men</a></li>
                <li><a href="Women-shoe.php">Women</a></li>
                <li><a href="Children-shoe.php"> Children </a></li>
              </ul>
          </li>
          <li class="menu"><a href="#" class="nav-link px-2 text-white">Brands</a>
              <ul class="sup-menu">
                <li><a href="{{ route('customer.nike') }}">Nike</a></li>
                <li><a href="{{ route('customer.adidas') }}">Adidas</a></li>
                <li><a href="Puma.php"> Puma </a></li>
              </ul>
          </li>
          <li><a href="{{ route('customer.contact') }}"  class="nav-link px-2 text-white">Contact</a></li>
          <li><a href="{{route ('customer.about') }}" class="nav-link px-2 text-white">About us</a></li>
          <!-- <a href="cart.php"><img src="/icon/cart.png" alt="" width="40px" height="40px"><span id='lblCartCount' style="color: red;"></span></a> -->
          
        </ul>
        
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="nike.php" method="POST">
          <input onclick="search()" type="search" class="form-control form-control-dark text-bg-dark" id="searchInput" placeholder="Search..." name="keyword" aria-label="Search">
    
        </form>

        <div class="text-end">
          
          <ul class="nav-links">
          <li class="nav-link dropdown">Xin chào, <a  class="dropdown"><i class="bi bi-chevron-compact-down"></i></a>
          <ul class="dropdown-list">
              <li class="nav-link"><a href="profile.php">Profile</a>
              <li class="nav-link"><a href="history.php">History</a>
              <li class="nav-link"><a href="logout.php?logout=true">Logout</a>
          </ul>
          </li>
      </ul>
        
        </div>
      </div>
    </div>
  </header>
  </div>
  <div class="div-1">
       <div class="div-2">
        <h1 class="h1-1" >Sportsneaker</h1>
        <h2 class="h2-1"><i>The ultimate destination for shoes</i></h2>
        </div>
    </div>
  
    <script>
        function search() {
            var input = document.getElementById("searchInput").value; // Lấy từ khoá tìm kiếm từ input

            // Thực hiện xử lý tìm kiếm ở đây (gọi API hoặc xử lý logic tìm kiếm)

            // Hiển thị kết quả tìm kiếm
            var searchResults = document.getElementById("searchResults");
            searchResults.innerHTML = "Kết quả tìm kiếm cho: " + input;}

    </script>

<section>
    @yield('content')
</section>

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #6351ce"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/" class="text-white me-4">
        <img src="/icon/facebook.png" alt="" style="width: 30px; height:30px;">
        </a>
        <a href="https://www.instagram.com/" class="text-white me-4">
          <img src="/icon/instagram.png" alt="" style="width: 30px; height:30px;">
        </a>
        <a href="https://google.com/" class="text-white me-4">
          <img src="/icon/google.png" alt="" style="width: 30px; height:30px;">
        </a>
        <a href="https://twitter.com/" class="text-white me-4">
          <img src="/icon/twitter.png" alt="" style="width: 30px; height:30px;">
        </a>
        <a href="https://github.com/" class="text-white me-4">
          <img src="/icon/github.png" alt="" style="width: 30px; height:30px;">
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Sport Sneakers</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            Sport Sneakers is maintained by a small team of developers on GitHub. We’re actively 
            looking to grow this team and would love to hear 
            from you if you’re excited about CSS
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Brands</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Nike</a>
            </p>
            <p>
              <a href="#!" class="text-white">Adidas</a>
            </p>
            <p>
              <a href="#!" class="text-white">Sneaker</a>
            </p>
            <p>
              <a href="#!" class="text-white">Jorndan</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Ha Noi, HN 10012, VN</p>
            <p><i class="fas fa-envelope mr-3"></i> shoeshop@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->