<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = request()->input('filter', 5);

        $query = Order::select('orders.*')
            ->join('payments', 'payments.id_payment', '=', 'orders.id_payment');

        if ($filter != 5) {
            $query->where('payments.status', $filter);
        }

        $result = $query->orderByDesc('orders.updated_time')->get();

        return view('admin.order.index', ['result' => $result, 'filter' => $filter], compact('result', 'filter'));
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order = Order::join('payments as p', 'p.id_payment', '=', 'orders.id_payment')
            ->where('orders.id', '=', $order->id)
            ->select('orders.*', 'p.*')
            ->first();
        $payment = DB::table('payments')->get();
        $order_detail = DB::table('order_detail as od')
            ->join('products as p', 'p.id_product', '=', 'od.id_product')
            ->join('cart as c', 'c.id_productDT', '=', 'p.id_product')
            ->where('od.id_order', '=', $order->id)
            ->select('od.*', 'p.*', 'c.*')
            ->get();
        return view('admin.order.edit', compact('order', 'payment', 'order_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
