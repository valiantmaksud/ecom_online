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

        try {

            $data['status'] = 1;
            $category = SubCategory::create($data);

            $this->upload_file($request->image, $category, 'image', 'sub_categories', 'webp');


        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }

        return redirect()->back()->withMessage('Category created successfully!');
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
    public function update(Request $request, Category $category)
    {
        try {
            $category->update($request->only('name'));
            
            $this->upload_file($request->image, $category, 'image', 'sub_categories', 'webp');
            
        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }

        return redirect()->back()->withMessage('Category updated successfully!');
    }







    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTROY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy(Category $category)
    {
        try {
            if (file_exists($category->image)) {
                unlink($category->image);
            }
            $category->delete();
            cache()->forget('sub_categories');
        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }


        return redirect()->back()->withMessage('Category deleted successfully!');
    }
}
