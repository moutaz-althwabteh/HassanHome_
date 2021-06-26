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

Route::get('/add_project', function () {
    return view('project.add_project');
});

Route::get('/add_supplier', function () {
    return view('project.add_supplier');
});

Route::get('/add_order', function () {
    return view('project.add_order');
});

Route::get('/view_projects', function () {
    return view('project.view_projects');
});

// Route::get('/view_suppliers', function () {
//     return view('project.view_suppliers');
// })->name('suppliers.view');

Route::get('/view_orders', function () {
    return view('project.view_orders');
})->name('order.view');

Route::resource('orders', 'OorderController');

Route::resource('supplier', 'SupplierController');
