<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
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

Route::get('/panel', function () {
    return view('index');
})->name('Panel');

Route::group(['prefix' => '/panel' ], function(){
    
    /**
     * Rutas para productos
     */
    Route::group(['prefix' => '/registrar' ], function(){

        Route::get('/', [ProductsController::class, 'index'])->name('ProductsIndex');
    
        Route::get('/getAllProducts', [ProductsController::class, 'getAllProducts'])->name('getAllProducts');

        Route::post('/getProduct', [ProductsController::class, 'getProduct'])->name('getProduct');
    
    });
    
    /**
     * Rutas para Ventas
     */
    Route::group(['prefix' => '/ventas' ], function(){
    
        Route::get('/', [SalesController::class, 'index'])->name('SalesIndex');
    
        Route::get('/getAllVendors', [SalesController::class, 'getAllVendors'])->name('getAllVendors');
    
    });

});
