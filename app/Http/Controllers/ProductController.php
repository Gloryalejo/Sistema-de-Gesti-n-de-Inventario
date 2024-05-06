<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductLog;
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
        // Obtén solo los productos que no han sido eliminados
        $products = Product::whereNull('deleted_at')->get();
            
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

            // Registro en la bitácora
        ProductLog::create([
        'product_id' => $product->id,
        'action' => 'created',
        'details' => 'Product created',
        ]);

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

    // Encuentra el producto antes de la actualización
    $product = Product::findOrFail($id);

    // Captura los valores antes de la actualización
    $beforeUpdateValues = $product->getAttributes();

    // Actualiza el producto con los nuevos valores
    $product->update($request->all());

    // Genera la descripción del movimiento de actualización
    $description = "Updated product ";

    $changes = [];
    foreach ($beforeUpdateValues as $key => $value) {
        if ($product->{$key} != $value && $key !== 'updated_at') {
            $fieldName = ucwords(str_replace('_', ' ', $key));
            $changes[] = "$fieldName: $value to {$product->{$key}}";
        }
    }

    $description .= implode(', ', $changes);

    // Registra el evento de actualización en el log de productos
    ProductLog::create([
        'product_id' => $id,
        'action' => 'updated',
        'details' => $description,
        'user_id' => auth()->id(),
    ]);

    // Redirige de vuelta con un mensaje de éxito
    return redirect()->back()->with('status', 'Product Updated');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Busca el producto a "eliminar" de forma lógica
        $product = Product::findOrFail($id);

        // "Eliminar" el producto de manera lógica
        $product->delete();

        // Registro en la bitácora - Producto eliminado
        ProductLog::create([
        'product_id' => $id,
        'action' => 'deleted',
        'details' => 'Product deleted'
    ]);

        // Redirige de vuelta con un mensaje de éxito
        return redirect()->back()->with('status', 'Product Deleted');
    }
}
