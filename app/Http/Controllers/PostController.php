<?php

namespace App\Http\Controllers;

use \App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function info()
   {
      return view('World\form');
   }
   public function save(Request $request)
   {
      $product = new Post();
      $product->post_name = $request->post_name;
      $product->post_slug = $request->post_slug;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->state = $request->state;
      $product->city = $request->city;
      $product->pincode = $request->pincode;
      $product->country = $request->country;
      $product->status = $request->status;
      $product->save();
      return redirect('table');
   }
   public function index()
   {
      $product = Post::all();
      return view('World/table', compact('product'));
   }
   public function edit($id)
   {
      $product = Post::find($id);
      return view('World/edit', compact('product'));
   }
   public function update(Request $request, $id)
   {
      $product = Post::find($id);
      $product->post_name = $request->post_name;
      $product->post_slug = $request->post_slug;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->state = $request->state;
      $product->city = $request->city;
      $product->pincode = $request->pincode;
      $product->country = $request->country;
      $product->status = $request->status;
      $product->update();
      return redirect('table');
   }
   public function delete($id)
   {
      $product = Post::find($id);
      $product->delete();
      return redirect('table');
   }

}