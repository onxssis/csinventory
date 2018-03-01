<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function getCustomerData()
    {
        $search = Customer::where('id', request()->get('id'))->firstOrfail();

        return response()->json($search);
    }

    public function getProductData()
    {
        $search = Product::where('id', request()->get('id'))
                    ->with(['supplier', 'warehouse'])
                    ->firstOrfail();

        return response()->json($search);
    }

    public function store()
    {
        request()->validate([
            'product' => 'required',
            'customer' => 'required',
            'quantity' => 'required|numeric',
            'status' => 'required',
            'amount' => 'required|numeric'
        ]);

        Order::create([
            'order_no' => 'ORD' . strtoupper(str_random(5)),
            'product_id' => request('product'),
            'customer_id' => request('customer'),
            'quantity' => request('quantity'),
            'status' => request('status'),
            'selling_price' => request('amount'),
            'amount_total' => request('amount'),
        ]);

        return response()->json(['success' => true], 201);
    }
}
