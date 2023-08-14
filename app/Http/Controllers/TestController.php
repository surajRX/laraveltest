<?php

namespace App\Http\Controllers;
use App\Models\Testblade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function info(){
        return view('World/form');
    }
    Public function save(Request $request){
    $Product =new Testblade();
    $Product->name=$request->name;
    $Product->email=$request->email;
    $Product->address=$request->address;
    $Product->password=$request->password;
    $Product->save();
    return redirect('table');
}
public function index(){
    $data=Testblade::all();
    return view('World/table',compact('data'));
}
}
