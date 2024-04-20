<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    

    public function messageSent(Request $request)
    {
        try {
            Message::create([
                'user_id'       => auth()->id(),
                'message'       => $request->message,
                'product_id'    => $request->product_id,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => 0,
                'message' => $th->getMessage(),
            ]);
        }
        return response()->json([
            'success' => 1,
            'message' => 'Message sent successfully',
        ]);
    }
}
