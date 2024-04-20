<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\User;
use App\Traits\FileSaver;

class CustomerController extends Controller
{

    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $data['customers'] = User::query()->paginate();

        return view('admin.customers.index', $data);
    }



}
