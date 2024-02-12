<?php

namespace App\View\Components\backend;

use App\Models\Order;
use App\Models\User;
use Illuminate\View\Component;

class DashboardWidget extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data['totalEarning']       = Order::query()->where('status','deliveried')->sum('subtotal');
        $this->data['totalRefund']        = Order::query()->where('status','cancelled')->sum('subtotal');
        $this->data['totalOrder']         = Order::count();
        $this->data['totalCustomer']      = User::query()->where('type', 'customer')->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.dashboard-widget', $this->data);
    }
}
