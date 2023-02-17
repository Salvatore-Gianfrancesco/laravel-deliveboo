<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('restaurant_id', '=', $user->id)->with('plates')->orderBy('is_delivered')->orderByDesc('id')->paginate(6);

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $val_data = $request->validated();

        if ($request->is_delivered == 'on') {
            $val_data['is_delivered'] = true;
        } else {
            $val_data['is_delivered'] = false;
        }

        $val_data['restaurant_id'] = Auth::user()->id;

        $order = Order::create($val_data);

        return to_route('admin.orders.index')->with('message', "Ordine $order->id inserito correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if ($order->restaurant_id == Auth::user()->id) {
            return view('orders.show', compact('order'));
        } else {
            return view('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        if ($order->restaurant_id == Auth::user()->id) {
            return view('orders.edit', compact('order'));
        } else {
            return view('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $val_data = $request->validated();

        if ($request->is_delivered == 'on') {
            $val_data['is_delivered'] = true;
        } else {
            $val_data['is_delivered'] = false;
        }

        $order->update($val_data);

        return to_route('admin.orders.index')->with('message', "Ordine $order->id modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return to_route('admin.orders.index');
    }
}
