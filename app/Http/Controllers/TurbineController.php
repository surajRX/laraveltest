<?php

namespace App\Http\Controllers;
use \App\Models\Turbine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurbineController extends Controller
{
    public function info(){
    return view('World/form1');
}  
public function save(Request $request){
    $product=new Turbine();
    $product->name=$request->name;
    $product->workflow=$request->workflow;
    $product->day=$request->day;
    $product->address=$request->address;
    $product->pincode=$request->pincode;
    $product->status=$request->status;
    $product->save();
    return redirect('table1');
} 
public function index(){
    $product=Turbine::all();
    return view('World/table1',compact('product'));
 }  
  public function edit($id){
    $product=Turbine::find($id);
    return view('World/edit1',compact('product'));
  }

  public function update(Request $request,$id){
   $product=Turbine::find($id);
   $product->name=$request->name;
   $product->workflow=$request->workflow;
   $product->day=$request->day;
   $product->address=$request->address;
   $product->pincode=$request->pincode;
   $product->status=$request->status;
   $product->update();
   return redirect('table1');
}
public function delete($id){
    $product=Turbine::find($id);
    $product->delete(); 
    return redirect('table1');
}
}