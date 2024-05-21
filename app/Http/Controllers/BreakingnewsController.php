<?php

namespace App\Http\Controllers;

use App\Models\Breakingnews;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BreakingnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breakingnewses = Breakingnews::all();
        return view('layouts.dashboard.breakingnews.index',compact('breakingnewses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.dashboard.breakingnews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
            'breaking_title' => 'required',
            'breaking_date' => 'required',
        ]);
        // error part
        Breakingnews::insert([
            'breaking_title' => $request->breaking_title,
            'breaking_date' => $request->breaking_date,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('breakingnews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Breakingnews $breakingnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $breakingnews = Breakingnews::find($id);
        return view('layouts.dashboard.breakingnews.edit',compact('breakingnews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // error part
        $request->validate([
            'breaking_title'=>'required',
            'stutas'=>'required',
        ]);
        // error part
        $breakingnews_update = Breakingnews::find($id);
        $breakingnews_update->update([
            'breaking_title'=> $request->breaking_title,
            'stutas'=> $request->stutas,
        ]);
        return redirect()->route('breakingnews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Breakingnews::find($id);
        $delete->delete();
        return back()->with('success','You Successfully Deleted');
    }
}
