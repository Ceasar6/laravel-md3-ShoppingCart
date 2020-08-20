<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('index', compact('products'));
    }
   public function add($id)
   {
       $product = DB::table('products')->where('id', $id)->first();
       if ($product != null){
           $oldCart = Session::get('Cart') ? Session::get('Cart') : null;
           $newCart = new Cart($oldCart);
           $newCart->addCart($product, $id);
           Session::put('Cart', $newCart);
       }
       return view('cart', compact('newCart'));
   }
   public function deleteItemCart($id)
   {
       $oldCart = Session::get('Cart') ? Session::get('Cart') : null;
       $newCart = new Cart($oldCart);
       $newCart->deleteItemCart($id);
       if(count($newCart->products) > 0){
           Session::put('Cart', $newCart);
       }else{
           Session::forget('Cart');
       }
       return view('cart', compact('newCart'));
   }
}
