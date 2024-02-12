<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchPanel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($collections = null)
    {
        $this->data['collections'] = $collections;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-panel', $this->data);
    }
}
