<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Product;
use App\Traits\IncAllModels;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    use IncAllModels;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = $this->invoice->orderBy('id', 'desc')->paginate(10);
        //
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->user->all();
        $categories = $this->category->all();
        $invoices = $this->invoice->all();
        $companies = $this->company->all();
        $customers = $this->customer->all();
        $products = $this->product->all();
        //
        $products = $this->product->with('categories:name')->paginate(15);

        //
        return view('invoices.create', compact('products','users', 'categories', 'invoices', 'companies', 'customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
        $this->invoice->create($request->all());
        //
        return back()->with('msg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
        return view('invoices.index', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
        return view('invoices.index', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
        $this->invoice->find($invoice->id)->update($request->all());
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
        $this->invoice->find($invoice->id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
    //
    
}
