<?php

namespace App\Http\Controllers;
use App\Models\Host;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostController extends Controller
{
    Public function info(){
    return view('World\form');
}
public function save(Request $request){
    $product=new Host();
    $product->name=$request->name;
    $product->email=$request->email;
    $product->address=$request->address;
    $product->phone=$request->phone;
    $product->save();
    return redirect('table');
 }
 public function index(){
    $product=Host::all();
    return view('World/table',compact('product'));
 }
 public function edit($id){
    $product=Host::find($id);
    return view('World/edit',compact('product'));
 }
 public function update(Request $request,$id){
    $product=Host::find($id);
    $product->name=$request->name;
    $product->email=$request->email;
    $product->address=$request->address;
    $product->phone=$request->phone;
    $product->update();
    return redirect('table');
 }
 public function delete($id){
    $product=Host::find($id);
    $product->delete();
    return redirect('table');
 }
}
