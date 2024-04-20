<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    //------------------------------//
    //        INDEX METHOD          //
    //------------------------------//
    public function index(){
        $data['banners'] = Banner::query()->where('status', 1)->get();
        return view('frontend.index', $data);
    }


}
