<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product; // Importar el modelo Product

class InventoryController extends Controller
{
    public function index()
    {
        $inventoryRecords = Inventory::orderBy('id', 'asc')->paginate(10);

        return view('inventory.index', compact('inventoryRecords'));
    }

    // Método para mostrar el formulario de salida
    public function out()
    {
        $products = Product::orderBy('id','asc')->paginate(20);

        return view('inventory.out', compact('products'));
    }

    public function in()
    {
        $products = Product::orderBy('id','asc')->paginate(20);

        return view('inventory.in', compact('products'));
    }

    // Método para procesar el formulario de salida
    public function storeOut(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            //'product_id' => 'required|exists:products,id',
            //'quantity' => 'required|integer|min:1',
            'movement_date' => 'required|date',
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        foreach ($request->input() as $key => $value) {
            if (str_contains($key, "qty") && $value > 0) {
                $parameterSplit = explode('-', $key);
                $productId = $parameterSplit[2];

                // Obtener el producto
                $product = Product::findOrFail($productId); // Corregir la importación de Product

                // Verificar si hay suficiente cantidad disponible para la salida
                if ($product->quantity() < $value) {
                    return back()->withInput()->withErrors(['quantity' => 'La cantidad solicitada supera la cantidad disponible']);
                }

                // Crear un nuevo registro de salida en el inventario
                Inventory::create([
                    'product_id' => $product->id,
                    'quantity' => $value,
                    'movement_date' => $request->movement_date,
                    'movement_type' => 'Salida', 
                ]);

                //$product->save();
            }
        }

        // Redirigir a la página de inventario con un mensaje de éxito
        return redirect()->action([InventoryController::class, 'index'])->with('success', 'Salida de inventario registrada exitosamente');
    }

    // Método para procesar el formulario de entrada
    public function storeIn(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            //'product_id' => 'required|exists:products,id',
            //'quantity' => 'required|integer|min:1',
            'movement_date' => 'required|date',
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        foreach ($request->input() as $key => $value) {
            if (str_contains($key, "qty") && $value > 0) {
                $parameterSplit = explode('-', $key);
                $productId = $parameterSplit[2];

                // Obtener el producto
                $product = Product::findOrFail($productId); // Corregir la importación de Product

                // Crear un nuevo registro de salida en el inventario
                Inventory::create([
                    'product_id' => $product->id,
                    'quantity' => $value,
                    'movement_date' => $request->movement_date,
                    'movement_type' => 'Entrada', 
                ]);
                //$product->save();
            }
        }

        // Redirigir a la página de inventario con un mensaje de éxito
        return redirect()->action([InventoryController::class, 'index'])->with('success', 'Entrada de inventario registrada exitosamente');
    }
}
