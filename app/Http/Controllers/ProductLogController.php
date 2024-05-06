<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductLog;
use App\Models\Product;

class ProductLogController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los logs de productos (incluidos los eliminados)
        $logs = ProductLog::with(['product' => function ($query) {
            $query->withTrashed();
        }])
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('product-logs.index', compact('logs'));
    }

    /**
     * Show the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
{
    try {
        // Buscar el producto (incluido el eliminado) por ID
        $product = Product::withTrashed()->findOrFail($id);

        if ($product->trashed()) {
            // El producto ha sido eliminado (soft-delete)
            return "Product found (Soft-deleted): " . $product->name;
        } else {
            // El producto existe y no está eliminado
            return "Product found: " . $product->name;
        }
    } catch (\Exception $e) {
        // Manejar excepciones en caso de que el producto no sea encontrado
        return "Product not found (Product ID: $id)";
    }
}
}
