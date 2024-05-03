<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventoryRecords = Inventory::orderBy('movement_date', 'desc')->paginate(10);

        return view('inventory.index', compact('inventoryRecords'));
    }
}
