<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\FileSaver;

class CategoryController extends Controller
{

    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $category = Category::query();
        $data['categories'] = $category->latest()->paginate();

        // return $data;
        return view('admin.categories.index', $data);
    }







    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|unique:categories,name',
        ]);

        try {
            $data['status'] = 1;
            $category = Category::create($data);

            $this->upload_file($request->image, $category, 'image', 'categories', 'webp');


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
    public function edit(Request $request, Category $category)
    {
        
        $categories = Category::query();
        $data['categories']     = $categories->latest()->paginate();
        $data['category']       = $category;

        return view('admin.categories.index', $data);
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
            
            $this->upload_file($request->image, $category, 'image', 'categories', 'webp');
            
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
            cache()->forget('categories');
        } catch (\Throwable $th) {

            return redirect()->back()->withError($th->getMessage());

        }


        return redirect()->back()->withMessage('Category deleted successfully!');
    }
}
