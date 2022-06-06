<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'name',
        'price',
        'tax_value',
        'net_total',
    ];
    //
    //protected $hidden = ['pivot'];
    //
    public function categories()
    {
        # code...
        return $this->belongsToMany(Category::class,'category_products','category_id','product_id','id','id');
    }
}
