<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputAddon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $required = null, $value = null, $title = null, $placeholder = null, $type = "text", $class = null, $readonly = null)
    {
        $this->data['type']         = $type;
        $this->data['name']         = $name;
        $this->data['title']        = $title ?? ucfirst($name);
        $this->data['placeholder']  = $placeholder ?? $title ?? ucfirst($name); 
        $this->data['required']     = $required;
        $this->data['value']        = $value ?? old($name);
        $this->data['class']        = $class;
        $this->data['readonly']     = $readonly ?? false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-addon', $this->data);
    }
}
