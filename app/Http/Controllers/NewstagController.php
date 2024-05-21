<?php

namespace App\Http\Controllers;

use App\Models\Newstag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewstagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dashboard.newstag.index',[
            'news_tags' => Newstag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.dashboard.newstag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
            'news_tag' => 'required',
        ]);
        // error part
        Newstag::insert([
            'news_tag' => $request->news_tag,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('newstag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newstag $newstag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news_tag = Newstag::find($id);
        return view('layouts.dashboard.newstag.edit',compact('news_tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Newstag::find($id)->update([
            'news_tag' => $request->news_tag,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('newstag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Newstag::find($id);
        $delete->delete();
        return back()->with('success','Successfully Delete');
    }
}
