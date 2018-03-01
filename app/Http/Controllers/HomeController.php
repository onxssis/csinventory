<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount = User::all()->count();
        $productCount = Product::all()->count();
        $warehouseCount = Warehouse::all()->count();
        $orderCount = Order::all()->count();

        return view('home', compact('userCount', 'productCount', 'warehouseCount', 'orderCount'));
    }
}
