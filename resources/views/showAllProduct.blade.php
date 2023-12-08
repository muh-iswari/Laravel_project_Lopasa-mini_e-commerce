@extends('home')

@section('tes')

<div class="row" style="margin-top: 50px; margin-left: 95px;">
    <div class="col-md-11 d-flex " style="margin-left: 8px;">
        <a class="btn btn-light" href="/kategori/olahraga" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #ff7e5f, #ffcc70);">Olahraga</a>
        <a class="btn btn-light" href="/kategori/Perawatan tubuh" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #5c258d, #9d25b0);">Perawatan tubuh</a>
        <a class="btn btn-light" href="/kategori/pakaian" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #283c86, #45a247);">Pakaian</a>
        <a class="btn btn-light" href="/kategori/peralatan elektronik" role="button" style="width: 200px; padding-bottom: 20px; margin-right: 10px; background-image: linear-gradient(to right, #f2ecec, #afd4e7);">Peralatan elektronik</a>
        <a class="btn btn-light" href="/kategori/otomotif" role="button" style="width: 200px; padding-bottom: 20px; background-image: linear-gradient(to right, #02aab0, #0a6f5e);">Otomotif</a>
    </div>
  </div>
  
  
  
  <div class="row" style="margin-top: 20px; margin-left: 110px;">
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
@endsection

