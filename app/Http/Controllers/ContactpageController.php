<?php

namespace App\Http\Controllers;

use App\Models\Contactpage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ContactpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Contactpage::all();
        return view('layouts.dashboard.contactpage.index',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.dashboard.contactpage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
            'description' => 'required',
            'contact_photo' => 'required',
        ]);
        // error part
        if ($request->hasFile('contact_photo')) {
            $manager = new ImageManager(new Driver());
            $new_name = uniqid() . "." . $request->file('contact_photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('contact_photo'))->resize(1536,1026);
            $image->toJpeg(100)->save(base_path('public/uploads/contact_photo/'.$new_name));
        }
        Contactpage::insert([
            'contact_photo' =>$new_name,
            'description' =>$request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('contactpage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactpage $contactpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = Contactpage::find($id);
        return view('layouts.dashboard.contactpage.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $photo_update = Contactpage::find($id);
        $path = 'uploads/contact_photo/'.$photo_update->contact_photo;
        if ($request->hasFile('contact_photo')) {
            $manager = new ImageManager(new Driver());
            if (File::exists($path)) {
                unlink($path);
            }
            $new_name = uniqid() . "." . $request->file('contact_photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('contact_photo'))->resize(1536,1026);
            $image->toJpeg(100)->save(base_path('public/uploads/contact_photo/'.$new_name));
            $photo_update->update([
                'contact_photo' =>$new_name,
            ]);
        }
        $photo_update->update([
            'description' =>$request->description,
            'updated_at' =>Carbon::now(),
        ]);
        return redirect()->route('contactpage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $photo_delete = Contactpage::find($id);
        $path = 'uploads/contact_photo/'.$photo_delete->contact_photo;
        if (File::exists($path)) {
            unlink($path);
        }
        $photo_delete->delete();
        return back()->with('success','You Successfully Deleted');
    }
}
