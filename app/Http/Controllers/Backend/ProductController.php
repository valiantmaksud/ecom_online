<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\FileSaver;

class ProductController extends Controller
{
    use FileSaver;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']   = Product::with('category')->paginate(25);
        $data['categories'] = Category::query()->latest()->get();
        $data['subcategories'] = SubCategory::query()->latest()->get();

        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::query()->latest()->get();
        $data['subcategories'] = SubCategory::query()->latest()->get();
        $data['brands']     = Brand::query()->latest()->get();

        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required',
            'product_id'  => 'required',
            'description' => 'required',
            'category_id'=> 'required',
            'subcategory_id'=> 'required',
            'product_cost'=> 'required',
            'selling_price'=> 'required',
            'discount_price'=> 'required',
            'final_price'=> 'required',
        ]);
        if (empty($request->slug)) {
            $data['slug'] = Str::slug($request->name) .'-'. Product::max('id') + 1;
        }else{
            $data['slug'] = $request->slug;
        }
        $product = Product::create($data);
    
        $this->upload_file($request->image, $product, 'image', 'products', 'webp');

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product']    = Product::query()->with('category', 'subcategory')->find($id);
        $data['categories'] = Category::query()->latest()->get();
        $data['subcategories'] = SubCategory::query()->latest()->get();

        $data['brands']     = Brand::query()->latest()->get();

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'  => 'required',
            'description' => 'required',
            'category_id'=> 'required',
            'subcategory_id'=> 'required',
            'product_cost'=> 'required',
            'selling_price'=> 'required',
            'discount_price'=> 'required',
            'final_price'=> 'required',
        ]);
        if (empty($request->slug)) {
            $data['slug'] = Str::slug($request->name) .'-'. Product::max('id') + 1;
        }else{
            $data['slug'] = $request->slug;
        }
        $product = Product::find($id);
        $product->update($data);
    
        $this->upload_file($request->image, $product, 'image', 'products', 'webp');
        return redirect()->route('admin.products.index')->with('success', 'Product update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
