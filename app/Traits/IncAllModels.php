<?php

namespace App\Traits;

use App\Models\{Category, Company, Customer, Invoice, Offer, Product, User};

Trait IncAllModels
{
    public $user;
    public $category;
    public $invoice;
    public $company;
    public $customer;
    public $product;
    public $carbon;
    public $offer;
    //
    public function __construct(User $user, Category $category, Invoice $invoice, Company $company, Customer $customer, Product $product,Offer $offer)
    {
        $this->user = $user;
        $this->category = $category;
        $this->invoice = $invoice;
        $this->company = $company;
        $this->customer = $customer;
        $this->product = $product;
        $this->offer = $offer;
    }
}
