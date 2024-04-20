<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function index(Request $request)
    {
        $data['cart'] = $cart = Cart::where('user_id', auth()->id())->with('details.product')->first();
        $data['total'] = $cart->total_price ?? 0;
        $data['view'] = view('frontend._inc.cart-items', $data)->render();

        if (request()->referer == route('cart.checkout')) {
            $data['view2'] = view('frontend._inc.checkout-cart-data', $data)->render();
        }

        return $data;
    }


    public function store(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->first();

        if (!$cart) {
            $cart = Cart::create([
                'user_id'       => auth()->id(),
                'total_price'   => 0,
            ]);
        }

        $product = Product::find($request->product_id);
        if (CartDetail::where('cart_id', $cart->id)->where('product_id', $product->id)->exists()) {
            $cartDetail             = CartDetail::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
            $cartDetail->quantity  += $request->quantity;
            $cartDetail->save();

        } else {
            $cartDetail = CartDetail::create([
                'cart_id'       => $cart->id,
                'product_id'    => $product->id,
                'amount'        => $product->final_price ?? $product->selling_price,
                'quantity'      => $request->quantity,
            ]);
        }
        
        $cart->update([
            'total_price'   => $cart->details->sum('amount') * $cart->details->sum('quantity'),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully',
        ]);
    }


    public function update(Request $request, $id)
    {

        $CartDetail = CartDetail::find($id);
        $quantity = $request->quantity;

        
        $CartDetail->update([
            'quantity'     => DB::raw("quantity + {$quantity}"),
        ]);
        $CartDetail->refresh();

        if ($CartDetail->quantity < 1) {
            $CartDetail->delete();
        }
        $cart = Cart::query()->with('details')->find($CartDetail->cart_id);

        $CartDetail->cart->update([
            'total_price'   => $cart->details->sum("amount") * $cart->details->sum("quantity"),
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'Product updated to cart successfully',
        ]);
    }


    public function destroy($id)
    {
        $CartDetail = CartDetail::find($id);
        $cart       = Cart::where('id',$CartDetail->cart_id)->first();
        $CartDetail->delete();
        
        $CartDetail->cart->update([
            'total_price'   => $CartDetail->sum('amount'),
        ]);

        if ($cart->details->count() == 0) {
            $cart->delete();
        }

        return response()->json([
            'success' => true,
            'message' => 'Product removed from cart successfully',
        ]);
    }




    public function checkout()
    {
        return view('frontend.checkout.checkout');
    }
}
