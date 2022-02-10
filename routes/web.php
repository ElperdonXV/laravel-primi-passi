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
    $data = [
        'name' => 'Pinco',
        'surname'=> 'Pallo',
        'says' => 'Hello World!'   
    ];
    return view('home', $data);
})->name('home');

Route::get('/contatti', function(){
    $data = [
        'contatti'=> [
            'telefono' => '123456789',
            'mail' => 'pincopallo@says.com',
        ]
        ];
    return view('contatti', $data);    
})->name('contatti');

Route::get('/dove-siamo', function() {
    $data = [
        'indirizzo' => 'Via pinco pallo n.45',
        'citta' => 'Mirabilandia',
        'citofono' => 'Pallo Pinco'
    ];
    return view('dove-siamo', $data);
})->name('dove-siamo');