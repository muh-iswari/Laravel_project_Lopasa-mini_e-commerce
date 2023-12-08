@extends('layouts.main')

@section('menu')

    <!-- Contoh Carousel (Bootstrap 5) -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 1000px; margin: 0 auto; margin-bottom:30px"">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="width: 1000px; margin: 0 auto; margin-top:15px; border-radius: 10px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="carousel-item active">
      <img src="/asets/no1.jpg" class="d-block w-100" alt="..."> 
    </div>
    <div class="carousel-item">
      <img src="/asets/no2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/asets/no3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- akhir 1 --}}


{{-- 2 --}}
<div class="a" style=""> 
    <h3 style="margin-left: 115px; margin-top: 60px">Rekomendasi hari ini</h3>
  <div class="row" style="margin-top: 20px; margin-left: 95px;">
    <div class="col-md-11 d-flex " style="margin-left: 8px;">
        <a class="btn btn-light" href="/kategori/olahraga" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #ff7e5f, #ffcc70);">Olahraga</a>
        <a class="btn btn-light" href="/kategori/Perawatan tubuh" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #5c258d, #9d25b0);">Perawatan tubuh</a>
        <a class="btn btn-light" href="/kategori/pakaian" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #283c86, #45a247);">Pakaian</a>
        <a class="btn btn-light" href="/kategori/peralatan elektronik" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #f2ecec, #afd4e7);">Peralatan elektronik</a>
        <a class="btn btn-light" href="/kategori/otomotif" role="button" style="width: 200px; padding-bottom: 20px; background-image: linear-gradient(to right, #02aab0, #0a6f5e);">Otomotif</a>
    </div>
  </div>



  <div class="row" style="margin-top: 10px; margin-left: 110px;">
    {{-- <h3 style="margin-left: 7px; margin-bottom: 10px">Rekomendasi hari ini</h3> --}}
    
    @foreach ($products as $key => $product)
        <div class="col-md-2" style="margin-left: 9px; @if($key < 5) margin-bottom: 10px; @endif">
            <div class="card" style="width: 190px;">
                <img src="/asets/products/{{ $product->foto }}" class="card-img-top" alt="Foto Produk">
                <div class="card-body">
                    <p class="card-title" style="font-size: 14px;">{{ $product->nama }}</p>
                    <h5 class="card-text text-sm" style="font-size: 16px;">Rp{{ number_format($product->harga, 0, ',', '.') }}</h5>
                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-success">Detail</a>

                    <a href="" class="btn btn-cart"> 
                        <i class="bi bi-basket2" alt="Tambahkan ke Keranjang" class="cart-icon"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
  </div>


  
</div>
@endsection
