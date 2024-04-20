<?php

namespace App\View\Components\frontend;

use App\Models\Product;
use Illuminate\View\Component;

class TopSellingProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['products'] = Product::query()->where('status', 1)->latest()->take(20)->get();
        return view('components.frontend.top-selling-product', $data);
    }
}
