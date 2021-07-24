<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


    Route::resource('projects', 'ProjectController');


// Route::get('/view_orders', function () {
//     return view('project.view_orders');
// })->name('order.view');

Route::resource('orders', 'OorderController');
Route::resource('supplier', 'SupplierController');
Route::get('supplier/show_pays/{id}','SupplierController@show_pays')->name('supplier.pays');
Route::get('orders/show_order_details/{id}','OorderController@show_order_details')->name('orders.order_details');

Route::get('drafts/show_drafts/{id}','FlatController@show_drafts')->name('flat.drafts');



Route::get('supplier/soft/delete/{id}', 'SupplierController@softDelete')
->name('supplier.delete');

Route::get('order/soft/delete/{id}', 'OorderController@softDelete')
->name('order.delete');

Route::get('project/soft/delete/{id}', 'ProjectController@softDelete')
->name('project.delete');
Route::get('flat/soft/delete/{id}', 'FlatController@softDelete')
->name('flats.delete');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('order_details', 'OrderDetailsController');

Route::resource('pays', 'PaysController');
Route::resource('drafts', 'DraftController');

// flats
Route::resource('flats', 'FlatController');
Route::get('flats/add_drafts/{id}','FlatController@add_draft')->name('flats.add_drafts');




