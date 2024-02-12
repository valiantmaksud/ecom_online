<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class SizeSelection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sizes = [], $productid = null)
    {
        $this->data['sizes']        = $sizes;
        $this->data['product_id']   = $productid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.size-selection', $this->data);
    }
}
