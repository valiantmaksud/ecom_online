<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Traits\FileSaver;

class SubCategoryController extends Controller
{

    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $subcategory = SubCategory::query();
        $data['subcategories'] = $subcategory->latest()->paginate();
        $data['categories'] = Category::get();

        // return $data;
        return view('admin.sub_categories.index', $data);
    }







    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|unique:sub_categories,name',
            'category_id'   => 'required'
        ]);

        $data['status'] = 1;
        $subcategory = SubCategory::create($data);

        $this->upload_file($request->image, $subcategory, 'image', 'sub_categories', 'webp');

        return redirect()->back()->withMessage('Sub Category created successfully!');
    }








    /*
     |--------------------------------------------------------------------------
     | EDIT METHOD
     |--------------------------------------------------------------------------
    */
    public function edit(Request $request, $id)
    {
        
        $subcategories = SubCategory::query();
        $data['subcategories']     = $subcategories->latest()->paginate();
        $data['categories']         = Category::get();
        $data['subcategory']        = SubCategory::find($id);

        return view('admin.sub_categories.index', $data);
    }



    /*
     |--------------------------------------------------------------------------
     | UPDATE METHOD
     |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->update($request->only('name', 'category_id'));
            
        $this->upload_file($request->image, $subCategory, 'image', 'sub_categories', 'webp');

        return redirect()->back()->withMessage('Category updated successfully!');
    }







    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTROY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);
        if (file_exists($subCategory->image)) {
            unlink($subCategory->image);
        }
        $subCategory->delete();


        return redirect()->back()->withMessage('Sub Category deleted successfully!');
    }
}
