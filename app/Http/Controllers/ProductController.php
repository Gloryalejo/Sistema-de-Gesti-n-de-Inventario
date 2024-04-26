<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductSupplier;
use App\Models\Supplier;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:30|string',
            'description' => 'required|max:200|string',
            'base_price' => 'required',
            'base_cost' => 'required',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'base_cost' => $request->base_cost,
            'category_id' => $request->category_id,
            // 'supplier_id' => $request->supplier_id,
        ]);

        $suppliers = $request->supplier_id;
        $supplierArray = explode(',', $suppliers);

        foreach ($supplierArray as $supplier) {
            ProductSupplier::create([
                'product_id' => $product->id,
                'supplier_id' => $supplier
            ]);
        }

        return redirect('products/create')->with('status', 'Product Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::findOrFail($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:30|string',
            'description' => 'required|max:200|string',
            'base_price' => 'required',
            'base_cost' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required'
        ]);

        Product::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'base_cost' => $request->base_cost,
            'category_id' => $request->category_id,
            // 'supplier_id' => $request->supplier_id
        ]);
        $suppliers = $request->supplier_id;
        $supplierArray = explode(',', $suppliers);

        ProductSupplier::where([
            ['product_id', $id],
            // ['supplier_id', $supplier]
            ])->delete();

        foreach ($supplierArray as $supplier) {
            ProductSupplier::create([
                'product_id' => $id,
                'supplier_id' => $supplier
            ]);
        }

        return redirect()->back()->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductSupplier::where([
            ['product_id', $id],
            // ['supplier_id', $supplier]
            ])->delete();

        $products = Product::findOrFail($id);
        $products->delete();

        return redirect()->back()->with('status', 'Product Deleted');
    }
}
