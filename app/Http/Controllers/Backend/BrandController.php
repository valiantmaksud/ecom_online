<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\FileSaver;

class BrandController extends Controller
{

    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $data['brands'] = Brand::query()->get();

        // return $data;
        return view('admin.brands.index', $data);
    }







    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|unique:brands,name',
        ]);

        try {

            $data['status'] = 1;
            $brand = Brand::create($data);

            $this->upload_file($request->image, $brand, 'image', 'brands', 'webp');


        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }

        return redirect()->back()->withMessage('Brand created successfully!');
    }








    /*
     |--------------------------------------------------------------------------
     | EDIT METHOD
     |--------------------------------------------------------------------------
    */
    public function edit(Request $request, $id)
    {
        
        $subcategories = Brand::query();
        $data['brands']     = Brand::query()->latest()->paginate();
        $data['brand']              = Brand::find($id);

        return view('admin.brands.index', $data);
    }



    /*
     |--------------------------------------------------------------------------
     | UPDATE METHOD
     |--------------------------------------------------------------------------
    */
    public function update(Request $request, Brand $brand)
    {
        try {
            $brand->update($request->only('name'));
            
            $this->upload_file($request->image, $brand, 'image', 'brands', 'webp');
            
        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }

        return redirect()->back()->withMessage('Brand updated successfully!');
    }







    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTROY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy(Brand $brand)
    {
        try {
            if (file_exists($brand->image)) {
                unlink($brand->image);
            }
            $brand->delete();
        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }


        return redirect()->back()->withMessage('Brand deleted successfully!');
    }
}
