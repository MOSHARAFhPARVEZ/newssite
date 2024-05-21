<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Newstag;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function newstag(){
        return $this->belongsTo(Newstag::class,'news_tag_id');
    }
}
