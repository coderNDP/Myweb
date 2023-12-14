<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::join('brand', 'products.id_brand', '=', 'brand.id')
    ->join('categories as c1', 'products.id_category', '=', 'c1.id_category')
    ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
    ->select(
        'products.*', 
        'brand.name_brand', 
        'c1.name_category as parent', 
        'c2.name_category as child'
    )
    ->orderBy('products.id_product', 'ASC')
    ->paginate(10);
        return view('admin.product.index', compact('products'));
    }

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
    public function store(Request $request)
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
    public function update(Request $request, Product $product)
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
