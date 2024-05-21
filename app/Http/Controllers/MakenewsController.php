<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Makenews;
use App\Models\Newstag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class MakenewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('layouts.dashboard.makenews.index',[
            'makenewses' => Makenews::with('category')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('layouts.dashboard.makenews.create',[
            'newstags'=>Newstag::all(),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
        'news_title' => 'required',
        'news_time_date' => 'required',
        'news_thamnil' => 'required|image',
        'category_name' => 'required',
        'description' => 'required',
        ]);
        // error part


        if ($request->hasFile('news_thamnil')) {
            $manager = new ImageManager(new Driver());
            $new_name = uniqid() . "." . $request->file('news_thamnil')->getClientOriginalExtension();
            $image = $manager->read($request->file('news_thamnil'))->resize(1000,667);
            $image->toJpeg(100)->save(base_path('public/uploads/news_photo/'.$new_name));
            Makenews::insert([
                'news_title' => $request->news_title,
                'news_time_date' => $request->news_time_date,
                'news_thamnil' =>$new_name,
                'category_name' => $request->category_name,
                'description' => $request->description,
                'created_at' =>Carbon::now(),
            ]);
        }
        return redirect()->route('makenews.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Makenews $makenews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $makenews = Makenews::find($id);
        $categories = Category::all();
        return view('layouts.dashboard.makenews.edit',compact('makenews','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // error part
        $request->validate([
        'category_name' => 'required',
        ]);
        // error part
        $makenews_photo_update = Makenews::find($id);
        $img_path = 'uploads/news_photo/'.$makenews_photo_update->news_thamnil;

        if ($request->hasFile('news_thamnil')) {
            $manager = new ImageManager(new Driver());
            if (File::exists($img_path)) {
                unlink($img_path);
            }
            $new_name = uniqid() . "." . $request->file('news_thamnil')->getClientOriginalExtension();
            $image = $manager->read($request->file('news_thamnil'))->resize(1000,667);
            $image->toJpeg(100)->save(base_path('public/uploads/news_photo/'.$new_name));
            $makenews_photo_update->update([
                'news_title' => $request->news_title,
                'news_time_date' => $request->news_time_date,
                'news_thamnil' =>$new_name,
                'category_name' => $request->category_name,
                'description' => $request->description,
                'updated_at' =>Carbon::now(),
            ]);
        }
        return redirect()->route('makenews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $makenews_photo_delete = Makenews::find($id);
        $img_path = 'uploads/news_photo/'.$makenews_photo_delete->news_thamnil;
        if (File::exists($img_path)) {
                unlink($img_path);
        }
        $makenews_photo_delete->delete();
        return back()->with('success','You Successfully Deleted');
    }
}
