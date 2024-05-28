<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::orderBy('id', 'desc')->get();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name' => 'required|string|max:255',
            'item_description' => 'required|string',
            'item_category' => 'required',
            'item_code' => 'required',
            'item_quantity' => 'required',
        ]);


        $inventory = Inventory::create([
            'item_name' => $request->item_name,
            'item_description' => $request->item_description,
            'item_category' => $request->item_category,
            'item_code' => $request->item_code,
            'item_quantity' => $request->item_quantity,
        ]);

        return back()->with('success', 'Item Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit')->with('inventory', $inventory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'item_quantity' => 'required|numeric',
        ]);

        // Find the inventory record
        $inventory = Inventory::findOrFail($id);

        // Update the inventory record
        $inventory->item_quantity = $request->input('item_quantity');
        $inventory->save();

        return back()->with('success', 'Quantity Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
