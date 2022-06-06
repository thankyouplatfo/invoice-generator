<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Http\Requests\StoreCategoryProductRequest;
use App\Http\Requests\UpdateCategoryProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public $category;
    public $product;
    //
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    //{
    //    //
    //    $categories = $this->category->paginate(10);
    //    //
    //    return view('categoryProducts.index',compact('categories','prducts')); 
    //}
    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = $this->category->select('id', 'name')->get();
        $products = $this->product->select('id', 'name')->get();
        //
        return view('categoryProducts.create',compact('categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = $this->category->find($request->category_id);
        //
        $category->products()->syncWithoutDetaching($request->product_id);
        //
        return back()->with('msg', trans('site.msg_l'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryProductRequest  $request
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryProductRequest $request, CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoryProduct)
    {
        //
    }
    //
    public function getCatProsd()
    {
        # code...
        return $cat = Product::with('categories:id,name')->find(10);
    }
}
