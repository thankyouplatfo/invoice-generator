<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name', 'sub_address', 'city', 'district', 'science', 'phone_number_1', 'phone_number_2', 'tax_number','user_id'];
    //
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
    //
    public function categories()
    {
        return $this->belongsToMany(Company::class,'company_categories','company_id','category_id','id','id');
    }
    //
    public function customers()
    {
        # code...
        return $this->belongsToMany(Customer::class,'company_customers','company_id','customer_id','id','id');
    }
    //
    public function invoices()
    {
        # code...
        return $this->hasMany(Invoice::class);
    }
}
