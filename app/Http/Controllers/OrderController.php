<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
    
        return view('admin.order.index', ['result' => $result, 'filter' => $filter], compact('result','filter'));
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
        //
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
