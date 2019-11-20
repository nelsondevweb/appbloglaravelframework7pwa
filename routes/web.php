<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('listproduct');
// });
Route::get('/', 'ProductController@index');
Route::get('/list-supplier', 'SupplierController@index');

Route::get('/add-supplier', function () {
    return view('addsupplier');
});
Route::get('/add-product', function () {
    $suppliers = App\Supplier::all();
    return view('addproduct', compact('suppliers'));
});


Route::post('/add-product', 'ProductController@create')->name('admin-add-product');
Route::post('/add-supplier', 'SupplierController@create')->name('admin-add-supplier');
Route::delete('/product/delete/{id}', 'ProductController@delete')->name('admin-delete-product');
Route::delete('/supplier/delete/{id}', 'SupplierController@delete')->name('admin-delete-supplier');
