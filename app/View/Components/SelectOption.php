<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectOption extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $collections, $required = null, $value = null, $title = null, $placeholder = null, $class = 'select2')
    {
        $this->data['name']         = $name;
        $this->data['collections']  = $collections;
        $this->data['title']        = $title ?? ucfirst($name);
        $this->data['placeholder']  = $placeholder ?? 'Select '.$this->data['title'];
        $this->data['required']     = $required;
        $this->data['value']        = $value ?? old($name);
        $this->data['class']        = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-option', $this->data);
    }
}
