<?php

namespace App\Http\Controllers;
use App\Models\World;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WorldController extends Controller
{
   // public function index(){
   // $data=Category::all();
   // return view('world/table'.compact('data'));
   // }
   public function info(){
      return view('World/form');
  }
   public function save(Request $request){
      $product=new Category();
      $product->name=$request->name;
      $product->email=$request->email;
      $product->address=$request->address;
      $product->save();
      return redirect('table');
   }
   public function index(){
      $data=Category::all();
      return view('World/table',compact('data'));
   }
}

   

   