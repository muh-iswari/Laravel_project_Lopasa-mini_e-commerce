@extends('layouts.main')


@section('menu')
    <style>
        /* Atur tampilan agar sesuai kebutuhan */
        .product-info {
            /* margin-bottom: 50px; */
            overflow-y: auto; /* Membuat bagian kanan menjadi area yang dapat di-scroll */
            max-height: 80vh; /* Batasi tinggi maksimum area yang dapat di-scroll */
        }
        .product-image {
            position: relative;
        }
        .product-image img {
            width: 90%; /* Mengurangi ukuran gambar */
            height: auto;
        }
        .stock {
            position: absolute;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px;
            width: 100%;
        }
        .action-buttons {
            text-align: left;
            margin-top: 20px;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: #333;
            color: #fff;
            padding-top: 50px;
        }
        
        /* Styling untuk konten utama */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        
        /* Styling untuk link menu sidebar */
        .sidebar a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .sidebar a:hover {
            background-color: #555;
        }

        .navbar {
            border-bottom: 1px solid #ccc; /* Atur garis tipis dengan warna abu-abu (#ccc) */
        }
    </style>
</head>
<body>



<div class="container" style="margin-bottom: 60px">
    <div class="row" style="margin-top: 30px">
        <div class="col-md-6 product-image">
            <!-- Tampilkan foto produk -->
            <img src="/asets/products/{{ $product->foto }}" class="img-fluid" alt="Foto Produk">
            <!-- Tampilkan stok produk -->
            <div class="stock">
                <p>Stok: {{ $product->stok }}</p>
                <!-- Tombol Order -->
                <div class="action-buttons">
                    <button class="btn btn-outline-success my-2 my-sm-0">Order</button>
                    <button class="btn btn-success">+ Keranjang</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 product-info">
            <!-- Tampilkan informasi produk dari database -->
            <h2>{{ $product->nama }}</h2>
            <p>Harga: Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
            <p>Deskripsi:</p>
            <p>{{ $product->deskripsi }}</p>
            {{-- <p>Toko: {{ $product->toko->nama }}</p> --}}
        </div>
    </div>
</div>

@endsection

