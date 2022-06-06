<?php
//Follow the link below to fix this trait   :   https://stackoverflow.com/questions/27374613/laravel-intervention-image-class-class-not-found
namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait ImageUploadTrait
{
    protected $image_path = "app/public/images/covers";
    protected $image_height = 600;
    protected $image_width = 600;
    //
    public function uploadImage($img)
    {
        # code...
        $img_name = $this->imageName($img);
        // resize in save
        \Image::make($img)->resize($this->image_width, $this->image_height)->save(storage_path($this->image_path . '/' . $img_name));
        // 
        return 'images/covers/' . $img_name;
    }
    //
    public function imageName($image)
    {
        # code...
        $image = Str::slug(config('app.name') . ' image ' . str::slug(filter_var(Carbon::now(), FILTER_SANITIZE_NUMBER_INT))) . '.' . $image->extension();
        return $image;
    }
}

//  $data = $request->validated();
//  $data['cover_image'] = $this->uploadImage($request->cover_image); = http://bookstore-laravel.test/storage/images/covers/
//  
//  $this->book = Book::create($data);
//  $this->book->authors()->attach($request->author_id);
//  
//  return back()->with('msg', trans('site.msg_c'));
// <img src="{{ Str::contains($p->image_path, ['https']) ? $p->image_path : asset('storage/' . $p->image_path) }}" class="card-img-top">