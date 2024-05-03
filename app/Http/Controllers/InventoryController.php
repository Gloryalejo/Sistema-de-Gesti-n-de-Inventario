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
        $inventoryRecords = Inventory::orderBy('movement_date', 'desc')->paginate(10);

        return view('inventory.index', compact('inventoryRecords'));
    }

    // Método para mostrar el formulario de salida
    public function createOut()
    {
        return view('inventory.create_out');
    }

    // Método para procesar el formulario de salida
    public function storeOut(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'movement_date' => 'required|date',
            // Puedes agregar más reglas de validación según tus necesidades
        ]);

        // Obtener el producto
        $product = Product::findOrFail($request->product_id); // Corregir la importación de Product

        // Verificar si hay suficiente cantidad disponible para la salida
        if ($product->quantity < $request->quantity) {
            return back()->withInput()->withErrors(['quantity' => 'La cantidad solicitada supera la cantidad disponible']);
        }

        // Crear un nuevo registro de salida en el inventario
        Inventory::create([
            'product_id' => $product->id,
            'quantity' => -$request->quantity, // La cantidad de salida es negativa
            'movement_date' => $request->movement_date,
            'type' => 'salida', // Puedes usar un campo para indicar el tipo de movimiento
            // Otros campos según sea necesario
        ]);

        // Actualizar la cantidad disponible del producto
        $product->quantity -= $request->quantity;
        $product->save();

        // Redirigir a la página de inventario con un mensaje de éxito
        return redirect()->route('inventory.index')->with('success', 'Salida de inventario registrada exitosamente');
    }
}
