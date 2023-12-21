<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::join('brands', 'products.id_brand', '=', 'brands.id')
            ->join('categories as c1', 'products.id_category', '=', 'c1.id_category')
            ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
            ->select(
                'products.*',
                'brands.name_brand',
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
        $products = Product::join('brands', 'products.id_brand', '=', 'brands.id')
            ->join('categories as c1', 'products.id_category', '=', 'c1.id_category')
            ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
            ->select(
                'products.*',
                'brands.name_brand',
                'c1.name_category as parent',
                'c2.name_category as child'
            )
            ->orderBy('products.id_product', 'ASC')
            ->paginate(10);
        $brands = Brand::orderBy('id', 'ASC')->get();
        $cats = Category::orderBy('id_category', 'ASC')->where('level', 0)->get();
        return view('admin.product.create', compact('products', 'brands', 'cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('img'), $file_name);
        }
        $request->merge(['img' => $file_name]);
        $request->validate([
            'name' => 'required|string|unique:products',
            'img' => 'required',
            'id_brand' => 'required',
            'id_category' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'Des' => 'required'
        ]);
        $data = $request->all('name', 'img', 'id_brand', 'id_category', 'price', 'sale_price', 'Des');
        Product::create($data);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
         $products = DB::table('categories as c1')
            ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
            ->join('products', 'products.id_category', '=', 'c2.id_category')
            ->join('product_detail', 'product_detail.id_product', '=', 'products.id_product')
            ->join('brands', 'products.id_brand', '=', 'brands.id')
            ->join('image', 'image.id_product', '=', 'products.id_product')
            ->join('size', 'size.id_size', '=', 'product_detail.id_size')
            ->select('products.*', 'brands.name_brand', 'c1.name_category as parent', 'c2.name_category as child','image.*', 'size.*','product_detail.*')
            ->where('products.id_product', '=', $product->id_product)
            ->first();
            $image = DB::table('image')
            ->join('products', 'products.id_product', '=', 'image.id_product')
            ->where('products.id_product', '=', $product->id_product)
            ->get();
            
        
       

    return view('admin.product.detail', compact('products','image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $cats = Category::where('level', 0)->get();
        $brands = Brand::orderBy('id', 'ASC')->get();
        $category = DB::table('categories as c1')
            ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
            ->select('*', 'c2.name_category as child')
            ->limit(4)
            ->get();
        $pro = DB::table('categories as c1')
            ->leftJoin('categories as c2', 'c2.id_cha', '=', 'c1.id_category')
            ->join('products', 'products.id_category', '=', 'c2.id_category')
            ->join('brands', 'products.id_brand', '=', 'brands.id')
            ->select('products.*', 'brands.name_brand', 'c1.name_category as parent', 'c2.name_category as child')
            ->where('products.id_product', '=', $product->id_product)
            ->first();
        return view('admin.product.edit', compact('product', 'cats', 'brands', 'category', 'pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|unique:products,name,' . $product->id_product . ',id_product',
            'img' => 'required',
            'id_brand' => 'required',
            'id_category' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'Des' => 'required'
        ]);
        $data = $request->all('name', 'img', 'id_brand', 'id_category', 'price', 'sale_price', 'Des');
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
<<<<<<< Updated upstream

=======
    
    public function adidas(Request $request)
    {
        $sort = $request->input('sort', 'asc');

        $products = DB::table('product as p')
            ->select('p.*', 'b.name_brand', 'c.name_category')
            ->join('brand as b', 'b.id', '=', 'p.id_brand')
            ->join('category as c', 'c.id_category', '=', 'p.id_category')
            ->where('b.name_brand', '=', 'Adidas')
            ->orderBy('p.price', $sort)
            ->get();

        return view('adidas', compact('products', 'sort'));
    }
>>>>>>> Stashed changes
}



