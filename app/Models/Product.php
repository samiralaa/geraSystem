<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','stoer_id','category_id '];
    
    function product()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id','id');
    }
}
