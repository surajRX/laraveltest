<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyworldController extends Controller
{
    function myworld(){
    return view('world/myworld');
}
}
