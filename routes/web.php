<?php

use Illuminate\Http\Request;
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
    return view('listing',[
        'heading'=>'latest Listing',
        'listings'=>[
            [
                'id'=>'1',
                'title'=>'listing one',
                'description'=>'listing one description Lorem ipsum dolor sit amet, consectetur adip'
            ],
            [
                'id'=>'2',
                'title'=>'listing two',
                'description'=>'listing two description Lorem ipsum dolor sit amet Lorem Lorems'
            ]
        ]
    ]);
});
