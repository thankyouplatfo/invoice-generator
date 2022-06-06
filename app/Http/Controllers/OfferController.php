<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Traits\ImageUploadTrait;
use App\Traits\IncAllModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    use IncAllModels;
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = $this->offer->orderBy('id', 'desc')->paginate(10);
        //
        return view('ajaxOffers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ajaxOffers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfferRequest $request)
    {
        //
        $data = $request->validated();
        $data['image'] = $this->uploadImage($request->image);
        //
        $offer = $this->offer->create($data);
        //
        //return back()->with('msg', trans('site.msg_c'));
        //
        if ($offer)
            return response()->json([
                'status' => true,
                'msg' => 'تم الحفظ بنجاح',
            ]);
        else
            return response()->json([
                'status' => false,
                'msg' => 'لم يتم الحفظ ',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        //
        //$data = $request->validated();
        //if ($request->has('cover_image')) {
        //    # code...
        //    Storage::disk('public')->delete($offer->cover_image);
        //    $data['cover_image'] = $this->uploadImage($request->cover_image);
        //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $offer = Offer::find($request->id);   // Offer::where('id','$offer_id') -> first();

        if (!$offer)
            return redirect()->back()->with(['error' => __('messages.offer not exist')]);

        $offer->delete();

        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request->id
        ]);
    }
}
