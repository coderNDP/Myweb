<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class AdidasController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'asc');
        
        $products = DB::table('product as p')
            ->join('brand as b', 'b.id', '=', 'p.id_brand')
            ->join('category as c', 'c.id_category', '=', 'p.id_category')
            ->where('b.name_brand', 'Adidas')
            ->orderBy('price', $sort)
            ->get();

        return view('adidas.index', compact('products', 'sort'));
    }
}
