<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Paginate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($collections)
    {
        $this->data['data'] = $collections;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.paginate', $this->data);
    }
}
