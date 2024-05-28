<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Auth;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisitions = Requisition::orderBy('id', 'desc')->get();
        return view('requisitions.index', compact('requisitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Inventory::all();
        return view('requisitions.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requistion = Requisition::create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'reason' => $request->reason,
        ]);

        return back()->with('success', 'Requisition created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requisition $requisition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requisition $requisition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requisition $requisition)
    {
        // Validate the input data
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        // Update the requisition status
        $requisition->status = $request->input('status');
        $requisition->save();

        // Redirect the user with a success message
        return redirect()->route('requisitions.index')
            ->with('success', 'Requisition status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisition $requisition)
    {
        //
    }
}
