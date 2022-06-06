<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
    Category,
    Invoice,
    Company,
    Customer,
    Product
};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'الإحصائيات';
        //
        $users = User::count();
        $categories = Category::count();
        $invoices = Invoice::count();
        $companies = Company::count();
        $customers = Customer::count();
        $products = Product::count();
        //
        return view('home', compact('title','users', 'categories', 'invoices', 'companies', 'customers', 'products'));
    }
}
