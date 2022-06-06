<?php

namespace App\Http\Controllers;

use App\Models\CompanyCustomer;
use App\Http\Requests\StoreCompanyCustomerRequest;
use App\Http\Requests\UpdateCompanyCustomerRequest;

class CompanyCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyCustomer  $companyCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyCustomer $companyCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyCustomer  $companyCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyCustomer $companyCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyCustomerRequest  $request
     * @param  \App\Models\CompanyCustomer  $companyCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyCustomerRequest $request, CompanyCustomer $companyCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyCustomer  $companyCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyCustomer $companyCustomer)
    {
        //
    }
}
