<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchProductCategory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = null, $id= null)
    {
        $this->data['name'] = $name;
        $this->data['id'] = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-product-category', $this->data);
    }
}
