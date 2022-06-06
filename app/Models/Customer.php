<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name', 'city', 'district', 'science', 'phone', 'tax_number'];
    //
    public function companies()
    {
        # code...
        return $this->belongsToMany(Company::class,'company_customers','company_id','customer_id','id','id');
    }
    //
    public function invoice()
    {
        # code...
        return $this->hasMany(Invoice::class);
    }
}
