<?php

namespace App\Http\Controllers;
use App\Models\Info;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class InfoController extends Controller
{
    public function info(){
        return view('info/info');
    }
    public function save(Request $request){

        // $product=new Info();
        // $product->name=$request->name;
        // $product->email=$request->email;
        // $product->price=$request->price;
        // $product->save();
        // return back();
    }
}
