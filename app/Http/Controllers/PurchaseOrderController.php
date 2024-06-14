<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\PurchaseOrder;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Auth;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = PurchaseOrder::orderBy('id', 'desc')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $items = Inventory::all();
        return view('orders.create', compact('suppliers', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'supplier_id' => 'required',
            'delivery_date' => 'required|date|after:' . now()->format('Y-m-d'),
            'unit_price' => 'required',
            'item_name' => 'required',
            'quantity' => 'required',
        ]);


        $order = PurchaseOrder::create([
            'supplier_id' => $request->supplier_id,
            'delivery_date' => $request->delivery_date,
            'item_name' => $request->item_name,
            'unit_price' => $request->unit_price,
            'total_price' => $request->unit_price * $request->quantity,
            'user_id' => auth()->user()->id,
            'quantity' => $request->quantity
        ]);

        return back()->with('success', 'Purchase Order Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        //
    }
}
