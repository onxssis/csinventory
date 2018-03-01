<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $warehouses = Warehouse::all('id', 'name');
        $suppliers = Supplier::all('id', 'name');

        return view('products.create', compact('product', 'warehouses', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductsRequest|Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request, Product $product)
    {

        Product::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'supplier_id' => $request->supplier,
            'warehouse_id' => $request->warehouse,
            'cost_price' => $request->cost_price * 100,
            'selling_price' => $request->selling_price * 100,
            'quantity' => $request->quantity,
            'initial_quantity' => $request->quantity,
        ]);

        return redirect()->back()->with(['success' => 'Product added to inventory.']);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // TODO: Refactor, duplication here

        $warehouses = Warehouse::all('id', 'name');
        $suppliers = Supplier::all('id', 'name');

        return view('products.edit', compact('product', 'warehouses', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductsRequest|Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, Product $product)
    {
//        dd($request->description);

        $product->update([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'supplier_id' => $request->supplier,
            'warehouse_id' => $request->warehouse,
            'cost_price' => $request->cost_price * 100,
            'selling_price' => $request->selling_price * 100,
            'quantity' => $request->quantity,
            'initial_quantity' => $request->quantity,
        ]);

        return redirect()->route('products.index')->with(['success' => 'Product updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
