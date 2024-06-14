<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use App\Models\PurchaseOrder;
use App\Models\Requisition;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = PurchaseOrder::orderBy('id', 'desc')->get();
        return view('invoices.index', compact('orders'));
//         $requisitions = Requisition::where('status', 'approved')->get();
//        return view('invoices.index', compact('requisitions'));
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
        $order = PurchaseOrder::findorfail($id);
        return view('invoices.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoices $invoices)
    {
        //
    }
}
