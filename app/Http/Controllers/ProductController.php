<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     //Invocar el modelo
    public function index()
    {
       // $products=Product::all();
        //foreach(
      //  $products as $product
      // ){
      //      echo($product->id.'.'.$product->name.'<br/>');
     //  }
        return '111';
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
     {
           // $product=Product::where('id',$id)->first();

               // echo($product->id.'.'.$product->name.'<br/>');
        //return 'Este es el producto '. $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
