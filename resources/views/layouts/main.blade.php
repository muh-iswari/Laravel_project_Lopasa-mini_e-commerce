<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lopasa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      overflow-x: hidden;
    }
    /* CSS khusus untuk input pencarian */
    #cari {
      width: 500px; /* Mengurangi lebar input pencarian */
      /* margin: auto; Letakkan di tengah */
    }
  
    /* Penyesuaian jarak antara kategori dan pencarian */
    .navbar-nav .nav-item:first-child {
      margin-right: 30px; /* Jarak 30px dari kategori ke pencarian */
    }
  
    /* Penyesuaian jarak antara pencarian dan keranjang */ 
    .form-inline {
      margin-right: 0px; /* Jarak 40px dari pencarian ke keranjang   */
    }

    #navbarNav {
        margin-right: 10px;
        /* width: ; */
    }

    .navbar {
      border-bottom: 1px solid #ccc; /* Atur garis tipis dengan warna abu-abu (#ccc) */
    }

    .btn-cart {
        display: inline-block;
        margin-top: 10px;
        text-decoration: none;
        position: relative;
    }

    .cart-icon {
        width: 24px;
        height: 24px;
        transition: transform 0.3s ease-in-out;
    }

    /* Animasi saat hover pada tombol */
    .btn-cart:hover .cart-icon {
        transform: scale(1.2);
        /* Ubah ukuran ikon saat dihover */
    }
  </style>
</head>
<body>

  @auth
<nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
  <a class="navbar-brand" href="/" style="margin-left: 80px">
    <!-- Tombol berbentuk logo toko -->
    <button class="btn btn-link navbar-btn" type="button">
      <img src="/asets/logo/logo.png"  height="50" class="d-inline-block align-top" alt="Logo">
    </button>
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav" >
    <!-- Add your navigation links here -->
    <ul class="navbar-nav" style="margin-right: 40px;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Kategori</a>
      </li>
    </ul>

  <div class="row align-items-center" style="margin-right: 20px;">
    <div class="col-md-auto">
        <form action="{{ route('search') }}" method="GET" class="form-inline" id="cari" style="margin-top: 10px; margin-right: 0px;">
            <div class="input-group">
                <input class="form-control mr-sm-2 custom-search-input" type="search" name="keyword" placeholder="Cari di Lopasa" aria-label="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success"><img src="/asets/logo/cari.png" alt="Logo Pencarian" height="25"></button>
                </div>
            </div>
        </form>
    </div>
</div>




    
    <!-- Cart icon -->
    <ul class="navbar-nav mr-3" style="margin-right: 5px;">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="/asets/logo/shopping_bag.png" width="24" height="24" alt="Cart">
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
            <img src="/asets/logo/foto-toko.png" width="35" height="35" alt="Cart" style="border-radius: 50%;">
        </a>
      </li> --}}

          <li class="nav-item">
        <a class="nav-link" href="/profile">
            <img src="/asets/logo/foto-profil.png" width="40" height="40" alt="Cart" style="border-radius: 50%;">
        </a>
      </li>
    </ul>

    <a class="btn btn-success" href="/sesi/logout">Logout</a>
      </div>
    </nav>
@endauth
    

@guest
    <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
  <a class="navbar-brand" href="/" style="margin-left: 80px">
    <!-- Tombol berbentuk logo toko -->
    <button class="btn btn-link navbar-btn" type="button">
      <img src="/asets/logo/logo.png"  height="50" class="d-inline-block align-top" alt="Logo">
    </button>
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav" >
    <!-- Add your navigation links here -->
    <ul class="navbar-nav" style="margin-right: 40px;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Kategori</a>
      </li>
    </ul>

  <div class="row align-items-center" style="margin-right: 20px;">
    <div class="col-md-auto">
        <form action="{{ route('search') }}" method="GET" class="form-inline" id="cari" style="margin-top: 10px; margin-right: 0px;">
            <div class="input-group">
                <input class="form-control mr-sm-2 custom-search-input" type="search" name="keyword" placeholder="Cari di Lopasa" aria-label="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success"><img src="/asets/logo/cari.png" alt="Logo Pencarian" height="25"></button>
                </div>
            </div>
        </form>
    </div>
</div>




    
    <!-- Cart icon -->
    <ul class="navbar-nav mr-3" style="margin-right: 5px;">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="/asets/logo/shopping_bag.png" width="24" height="24" alt="Cart">
        </a>
      </li>

      <a class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 5px" href="/sesi">Login</a>
      <a class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 5px" href="/sesi/register">Register</a>
    </nav>
@endguest



<div class="menu">
    @yield('menu')
</div>






<footer class="footer bg-light py-4" style="margin-top: 200px; ">
  <div class="container" style="margin-left:110px">
      <div class="row">
          <div class="col-md-3">
              <h5>About Us</h5>
              <p>PT Lopasa Indo merupakan platform e-commerce inovatif yang memenuhi berbagai kebutuhan Anda dengan menawarkan berbagai produk dari berbagai kategori seperti elektronik, fashion, peralatan rumah tangga, kecantikan, dan banyak lagi. Kami bertujuan untuk memberikan pengalaman belanja yang tak tertandingi, menjamin kenyamanan, kualitas, dan kehandalan bagi pelanggan kami.</p>
          </div>
          <div class="col-md-3">
              <h5>Customer Service</h5>
              <ul class="list-unstyled">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">Returns</a></li>
              </ul>
          </div>
          <div class="col-md-3">
              <h5>Information</h5>
              <ul class="list-unstyled">
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Site Map</a></li>
              </ul>
          </div>
          <div class="col-md-3">
              <h5>Follow Us</h5>
              <ul class="list-unstyled">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
              </ul>
          </div>
      </div>
      <hr>
      <!-- Menampilkan gambar logo -->
      <div class="text-center">
          <img src="/asets/logo/logo.png" alt="PT Lopasa Indo Logo" height="50" style="margin-bottom: 5px">
          <p>&copy; 2023 PT Lopasa Indo. All Rights Reserved.</p>
      </div>
  </div>
</footer>

 











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>