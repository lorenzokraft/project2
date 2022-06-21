<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;


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
//     return view('welcome');
// });

///////////////////////////////////
//ALL USER ROUTE
///////////////////////////////////
Route::get('/', [PagesController::class, 'index']);


//////////////////
//  Tenants Routes
//////////////////



// Submit new Maintenance request 

Route::middleware(["auth"])->group(function () {

    //
    Route::get('/submit_request', [RequestController::class, 'submit_request']);


    // Save Request
    Route::post('/save_request', [RequestController::class, 'save_request'])->name("save_request");

    // View Submitted Queries  
    Route::get('/submitted_request/{status?}', [RequestController::class, 'submitted_request'])->name("my_queries");


    Route::get('/request_details{status?}', [RequestController::class, 'request_details'])->name("my_queries");
});








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});






///////////////////////////////////
//ALL ADMIN ROUTE
///////////////////////////////////

// Redirect Admin to a diffrent page
Route::get('/redirect', [PagesController::class, 'redirect']);


Route::get('/admin', [AdminController::class, 'index'])->name("admin_home");

// Request Detail page
Route::get('/admin/request/view/{id}', [AdminController::class, 'view_request'])->name("admin_request_detail_page");


Route::get('/admin/request/approve/{id}', [AdminController::class, 'approve'])->name("approve_request");
Route::get('/admin/request/cancel/{id}', [AdminController::class, 'cancel'])->name("cancel_request");
Route::get('/admin/request/pending/{id}', [AdminController::class, 'pending'])->name("pend_request");


//Create a new tenant Account
Route::get('/admin/create_tenant', [PagesController::class, 'create_tenant']);
