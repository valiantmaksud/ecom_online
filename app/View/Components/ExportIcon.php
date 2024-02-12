<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ExportIcon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pdf=null, $excel=null)
    {
        $this->data['pdf'] = $pdf;
        $this->data['excel'] = $excel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.export-icon', $this->data);
    }
}
