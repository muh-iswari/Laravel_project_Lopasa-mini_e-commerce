<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Toko;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function showProducts()
    {   
        $products = Product::inRandomOrder()->take(5)->get(); 
        return view('home', ['products' => $products]);
    }

    public function showAllProducts()
    {
        $products = Product::all();

        return view('showAllProduct', ['products' => $products]);
    }


public function showProductsByCategory($kategori = null)
    {
        $products = Product::query();

        if ($kategori) {
            // Jika ada kategori yang dipilih, filter produk berdasarkan kategori
            $products = $products->where('kategori', $kategori);
        }

        // Mengambil semua produk yang sesuai dengan kriteria (tanpa batasan)
        $products = $products->inRandomOrder()->get();

        return view('home', ['products' => $products]);
    }



    public function showProductDetail($id)
    {
        // Ambil data produk dari database berdasarkan ID
        $product = Product::findOrFail($id); // Misalnya ID produk adalah parameter yang diterima dari URL

        // Tampilkan tampilan detail produk (product-detail.blade.php) dengan data produk yang diambil
        return view('product-detail', compact('product'));
    }


//     public function search(Request $request)
//     {
//         $products = $request->input('products'); // Ambil nilai yang diinputkan pengguna
    
//        $cars = Car::where('products', 'like', '%' . $products . '%')->get();

    
//         return view('product', ['products' => $products]);
//     }


    public function search()
    {
        $keyword = request()->input('keyword');
        
        // Lakukan proses pencarian di model Anda
        $results = Product::where('nama', 'LIKE', "%$keyword%")->get();

        return view('search', compact('results'));
    }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
