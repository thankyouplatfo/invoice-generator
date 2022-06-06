<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'invoice_type',
        'quantity',
        'notes',
        'total',
        'tax_value',
        'paid_up',
        'the_rest',
        'payment_type',
        'net_gross',
        'special_number',
        'time_and_date',
    ];
    //
    public function company()
    {
        # code...
        return $this->belongsTo(Company::class);
    }
    //
    public function customer()
    {
        # code...
        return $this->belongsTo(Customer::class);
    }
    //
    public function categories()
    {
        # code...
        return $this->belongsToMany(Category::class, 'invoice_categories', 'invoices', 'categories', 'id', 'id');
    }
}
