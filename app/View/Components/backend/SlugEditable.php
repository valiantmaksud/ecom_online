<?php

namespace App\View\Components\backend;

use Illuminate\View\Component;

class SlugEditable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug = null, $prefix = 'prdouct')
    {
        $this->data['slug']     = $slug;
        $this->data['prefix']   = $prefix;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.slug-editable', $this->data);
    }
}
