<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function info(){
        return view('product/info');
    }
    public function save(Request $request){

        $product=new Product();
        $product->name=$request->name;
        $product->email=$request->email;
        $product->price=$request->price;
        $product->save();
        return back();
    }
}
