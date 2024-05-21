<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Makenews;
use App\Models\Newstag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inventory($id)
    {
        $makenews = Makenews::find($id);
        $newstags = Newstag::all();
        $inventories = Inventory::where('makenews_id',$id)->get();
        return view('layouts.dashboard.inventory.index',compact('makenews','newstags','inventories'));
    }
    public function inventorystore(Request $request, $id)
    {
        // error part
        $request->validate([
            'news_tag_id' => 'required',
        ]);
        // error part
        Inventory::insert([
            'news_tag_id' => $request->news_tag_id,
            'makenews_id' => $id,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('succcess','You Successfully Added');
    }
    public function index()
    {

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
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
