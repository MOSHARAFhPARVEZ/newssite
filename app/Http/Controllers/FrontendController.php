<?php

namespace App\Http\Controllers;

use App\Models\Breakingnews;
use App\Models\Category;
use App\Models\Contactpage;
use App\Models\Inventory;
use App\Models\Makenews;
use App\Models\Newstag;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $news_tags = Newstag::all();
        $newses = Makenews::latest()->get();
        $breakingnewses = Breakingnews::where('stutas',1)->latest()->get();
        // $breakingnewses = Breakingnews::where('stutas',1)->orderby('category_name','ASC')->latest()->get();
        return view('layouts.frontend.index',compact('categories','news_tags','newses','breakingnewses'));
    }
    public function makenewsdetails($id){
        $makenewses = Makenews::find($id);
        $inventories = Inventory::where("makenews_id",$makenewses->id)->get();
        $categories = Category::all();
        return view('layouts.frontend.makenewsdetails',compact('makenewses','inventories','categories'));
    }
    public function contact(){
        $contactifos = Contactpage::all();
        return view('layouts.frontend.contact',compact('contactifos'));
    }
}
