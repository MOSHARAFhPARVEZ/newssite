<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function message(Request $request)
    {
        // error part
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        // error part
        // insert part
        Contact::insert([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        // insert part
        // mail part
        $data = [
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('mmhparvez3800@gmail.com')->send(new Contactmail($data)) ;
        // mail part
        return back()->with('success','You Successfully Sent Your Message');
    }
    public function showmessage()
    {
        $messages = Contact::all();
        return view('layouts.dashboard.contact.showmessage',compact('messages'));
    }
    public function index()
    {
        //
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
