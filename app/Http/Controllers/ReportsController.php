<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Requisition;
use App\Models\User;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersCount = User::count();
        $itemsCount = Inventory::count();
        $itemsExLowCount = Inventory::where('item_quantity', '<', 10)->count();
        $itemsLowCount = Inventory::where('item_quantity', '<', 50)->count();
        $itemsAvailableCount = Inventory::where('item_quantity', '>=', 20)->count();

        $reqCount = Requisition::count();
        $reqACount = Requisition::where('status', 'approved')->count();
        $reqRCount = Requisition::where('status', 'rejected')->count();
        $reqPCount = Requisition::where('status', 'pending')->count();

        return view('reports.index', compact('usersCount', 'itemsCount', 'itemsExLowCount', 'itemsLowCount', 'itemsAvailableCount', 'reqCount', 'reqACount', 'reqRCount', 'reqPCount'
            ));
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
        //
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
