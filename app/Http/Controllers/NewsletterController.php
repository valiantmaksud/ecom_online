<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    
    


    public function index()
    {
        $data['newsletters'] = Newsletter::query()->latest()->paginate(50);
        return view('admin.newsletters.index', $data);
    }

    
    


    public function store(Request $request)
    {
        try {
            Newsletter::firstOrCreate([
                'email'     => $request->email,
            ],[
                'name'      => $request->name,
            ]);
            return response()->json([
                'status'    => 1,
                'message'   => 'You have successfully subscribed.'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Please try again later.'
            ]);
        }
    }

   
    

    public function update(Request $request, $id)
    {
        //
    }

    
    




    public function destroy($id)
    {
        //
    }
}
