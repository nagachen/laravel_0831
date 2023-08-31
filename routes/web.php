<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    // $url = route('hall');
    //   dd($url);

    $data=[
        's1'=>'amy',
        's2'=>'bob',
        's3'=>'cat'
    ];
    return view('hall',['data123'=>$data])->with('man',$data);
})->name('hall');

Route::get('/f1', function () {
    return view('front.f1');
})->name('f1');

Route::get('/f2', function () {
    return view('front.f2');
})->name('f2');

Route::get('/f3', function () {
    return view('front.f3');
})->name('f3');

Route::get('/cal', function () {
    $option=['+','-','*','/'];
    $option=$option[rand(0,3)];
    $data=[
        'num1'=>78,
        'num2'=>36,
       'option'=>$option,
    ];
    $man=[
        '1'=>'amy',
        '2'=>'bob',
        '3'=>'cat',

    ];
    return view('front.calculate')->with('data',$data)->with('man',$man);
})->name('cal');