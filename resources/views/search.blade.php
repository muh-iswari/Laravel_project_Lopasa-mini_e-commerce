@extends('layouts.main')


@section('menu')
    <style>
    body {
      overflow-x: hidden;
    }
    /* CSS khusus untuk input pencarian */
    #cari {
      width: 450px; /* Mengurangi lebar input pencarian */
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

  

{{-- 2 --}}
<div class="row" style="margin-top: 30px; margin-left: 110px;">
    <h3 style="margin-left: 7px; margin-bottom: 30px">Hasil Penelusuran</h3>
  @foreach ($results as $product)
      <div class="col-md-2" style="margin-left: 9px">
          <div class="card" style="width: 190px;">
              <img src="/asets/products/{{ $product->foto }}" class="card-img-top" alt="Foto Produk">
              <div class="card-body">
                  <p class="card-title" style="font-size: 14px;">{{ $product->nama }}</p>
                  <h5 class="card-text text-sm" style="font-size: 16px;">Rp{{ number_format($product->harga, 0, ',', '.') }}</h5>
                  {{-- <p class="card-text text-sm" style="font-size: 12px;">Alamat Toko: {{ optional($product->toko)->alamat }}</p> --}}
                  <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-success">Detail</a>

                  <!-- Tombol Tambahkan ke Keranjang -->
                  <a href="" class="btn btn-cart"> {{-- {{ route('addToCart', $product->id) }} --}}
                      {{-- <img src="/asets/logo/shopping_bag.png" alt="Tambahkan ke Keranjang" class="cart-icon"> --}}
                      <i class="bi bi-basket2" alt="Tambahkan ke Keranjang" class="cart-icon"></i>
                  </a>
              </div>
          </div>
      </div>
  @endforeach
</div>
@endsection

  



