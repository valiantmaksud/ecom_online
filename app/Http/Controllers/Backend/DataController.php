<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DataController extends Controller
{
    

    public function cacheClear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', 'Cache cleared successfully');
    }
}
