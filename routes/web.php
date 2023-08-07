<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[StaticController::class,'index'])->name('home.index');
Route::get('/about', [StaticController::class,'about'])->name('home.about');
Route::get('/potofolio',[StaticController::class,'potofolio'] )->name('home.potofolio');
Route::get('/contact',[StaticController::class,'contact' ])->name('home.contact');

Route::resource('computers',ComputersController::class);



/*
Route::get('/about', function () {
    return view('about');
    //return '<h1>HELLO WORLD</h1>';
});
*/





////////////////////////////////////////////////////////////////
/*
Route::get('/store/{category?}/{item?}', function ($category=null,$item= null) {

    if (isset($category)) {
        return 'this page is viewing <span style ="color:red"> '.$category.' products</span>';
        if (isset($item)) {
            return 'this page is viewing <span style ="color:red">'.$item.' and the item is '.$item.'</span>';
        }
        
    }

    return '<h1>nothing</h1>';  

    //return '<h1>HELLO WORLD</h1>';
});
*/
///////////////////////////////////////////////////////////////
/*
Route::get('/store', function () {

    $filter=request('style');

    if(isset($filter))
    {
        return 'this page is viewing <span style ="color:red">'.$filter.' products</span>';

    }
    return 'this page is viewing <span style ="color:red"> all products</span>';



    //return '<h1>HELLO WORLD</h1>';
});*/