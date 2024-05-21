<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Makenews extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function newstag(){
        return $this->belongsTo(Newstag::class,'newstag','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_name','id');
    }
}
