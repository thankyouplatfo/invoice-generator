<?php

namespace App\Http\Controllers;

use App\Models\CompanyCategory;
use App\Http\Requests\StoreCompanyCategoryRequest;
use App\Http\Requests\UpdateCompanyCategoryRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Traits\IncAllModels;
use Illuminate\Http\Request;

class CompanyCategoryController extends Controller
{
    use IncAllModels;
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
        $companies = $this->company->orderBy('id', 'desc')->get();
        $categories = $this->category->orderBy('id', 'desc')->get();
        //
        return view('companiesCategories.create', compact('companies', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $company = $this->company->find($request->company_id);
        //
        $company->categories()->syncWithoutDetaching($request->category_id);
        //
        return back()->with('msg', trans('site.msg_l'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyCategory $companyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyCategory $companyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyCategoryRequest  $request
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyCategoryRequest $request, CompanyCategory $companyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyCategory $companyCategory)
    {
        //
    }
}
