<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Traits\FileSaver;

class BannerController extends Controller
{

    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $data['banners'] = Banner::query()->paginate();

        return view('admin.banners.index', $data);
    }



    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function create()
    {

        return view('admin.banners.create');
    }




    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'         => 'required',
            'link'          => 'required',
        ]);

        $data['status'] = 1;
        $banner = Banner::create($data);

        $this->upload_file($request->image, $banner, 'image', 'banners', 'webp');

        return redirect()->route('admin.banners.index')->withMessage('Banner created successfully!');
    }








    /*
     |--------------------------------------------------------------------------
     | EDIT METHOD
     |--------------------------------------------------------------------------
    */
    public function edit(Request $request, $id)
    {
        $data['banner'] = Banner::find($id);

        return view('admin.banners.edit', $data);
    }



    /*
     |--------------------------------------------------------------------------
     | UPDATE METHOD
     |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $banner = Banner::query()->find($id);
        $banner->update($request->only('title', 'link'));
            
        $this->upload_file($request->image, $banner, 'image', 'banners', 'webp');

        return redirect()->route('admin.banners.index')->withMessage('Banner updated successfully!');
    }







    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTROY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $banner = Banner::query()->find($id);
        if (file_exists($banner->image)) {
            unlink($banner->image);
        }
        $banner->delete();


        return redirect()->back()->withMessage('Banner deleted successfully!');
    }
}
