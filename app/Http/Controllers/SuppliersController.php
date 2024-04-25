<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $suppliers = Supplier::get();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30|string',
            'address' => 'required|max:150|string',
            'phone' => 'required',
        ]);

        Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect('suppliers/create')->with('status', 'Supplier Created');
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
        $suppliers = Supplier::findOrFail($id);
        return view('supplier.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:30|string',
            'address' => 'required|max:150|string',
            'phone' => 'required',
        ]);

        Supplier::findOrFail($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('status', 'Supplier Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers = Supplier::findOrFail($id);
        $suppliers->delete();

        return redirect()->back()->with('status', 'Supplier Deleted');
    }
}
