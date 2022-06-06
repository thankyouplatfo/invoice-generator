<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name'];
    //
    //protected $hidden = ['pivot'];
    //
    public function products()
    {
        # code...
        return $this->belongsToMany(Product::class,'category_products','category_id','product_id','id','id');
    }
    //
    public function companies()
    {
        return $this->belongsToMany(Company::class,'company_categories','company_id','category_id','id','id');
    }
    //
    public function invoices()
    {
        # code...
        return $this->belongsToMany(Category::class, 'invoice_categories', 'invoices', 'categories', 'id', 'id');
    }
}
