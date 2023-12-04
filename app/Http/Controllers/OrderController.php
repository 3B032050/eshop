<?php

namespace App\Http\Controllers;


use App\Models\CartItem;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        $user_id = Auth::id();
        $orders = Order::orderBy('id', 'DESC')->where('user_id',$user_id)->get();

        $data = [
            'orders' => $orders,
        ];

        return view('orders.index', $data);
        */
        $orders = auth()->user()->orders;
        $data = [
            'orders'=>$orders,
        ];
        return view('orders.index', $data);
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($order)
    {

        $orderitems = OrderItem::orderBy('id', 'DESC')->where('order_id',$order)->get();

        $data = [
            'orderitems' => $orderitems,
        ];

        return view('orders.show', $data);
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
    public function update(UpdateOrderRequest $request, Order $order)
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
