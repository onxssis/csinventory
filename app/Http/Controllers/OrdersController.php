<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create(Order $order)
    {
        $customers = Customer::all('name', 'id');
        $products = Product::all('name', 'code', 'id');

        return view('orders.create', compact('order', 'customers', 'products'));
    }

    public function show(Order $order)
    {

    }

    public function store()
    {

    }

    public function edit(Order $order)
    {

    }

    public function update(Order $order)
    {

    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with(['success' => 'Order deleted.']);
    }
}
