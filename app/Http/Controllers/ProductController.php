<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Supplier;

class ProductController extends Controller
{
  public function index(Request $request)
  {
      $products = Product::all();
      return view('listproduct', compact('products'));
  }

  public function create(Request $request)
  {
    $rules = [
         'title' => ['required', 'string', 'max:255'],
         'price' => ['required'],
         'amount' => ['required'],

     ];

     $this->validate($request, $rules);
     $product = new Product();

    $product->title = $request->title;
    $product->price = $request->price;
    $product->amount = $request->amount;
    $product->supplier_id = $request->supplier;
    $product->save();
    return redirect('/')->with(['success' => 'Save supplier success']);
  }


  public function delete($id)
  {
    $product = Product::find($id);
    Product::destroy($id);

    return redirect('/')->with(['success' => 'Delete product success']);
  }

}
