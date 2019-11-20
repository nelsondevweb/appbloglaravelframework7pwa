<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{

  public function index(Request $request)
  {
      $suppliers = Supplier::all();
      return view('listsupplier', compact('suppliers'));
  }

  public function create(Request $request)
  {
    $rules = [
         'name' => ['required', 'string', 'max:255'],
         'nmbusiness' => ['required', 'string', 'max:255'],
         'address' => ['required', 'string', 'max:255'],
         'phone' => ['required', 'string', 'max:255'],

     ];

     $this->validate($request, $rules);
     $supplier = new Supplier();

    $supplier->name = $request->name;
    $supplier->nmbusiness = $request->nmbusiness;
    $supplier->address = $request->address;
    $supplier->phone = $request->phone;
    $supplier->save();
    return redirect('/list-supplier')->with(['success' => 'Save supplier success']);
  }

  public function delete($id)
  {
    $supplier = Supplier::find($id);
    Supplier::destroy($id);

    return redirect('/list-supplier')->with(['success' => 'Delete supplier success']);
  }


}
