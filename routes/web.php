<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/home', function () {
    $listNav = [
        'home' => 'Home',
        'chiSiamo' => 'Chi siamo',
        'contatti' => 'Contatti'
    ];
    // passiamo solo $listnav
    // return view('home', $listNav);

    // passiamo un array di informazioni
    return view('home', [
        'list' => $listNav
    ]);
});

Route::get('/chiSiamo', function() {
    $listNav = [
        'home' => 'Home',
        'chiSiamo' => 'Chi siamo',
        'contatti' => 'Contatti'
    ];
    return view('chiSiamo', [
        'list' => $listNav
    ]);
});

Route::get('/contatti', function() {
    $listNav = [
        'home' => 'Home',
        'chiSiamo' => 'Chi siamo',
        'contatti' => 'Contatti'
    ];
    return view('contatti', [
        'list' => $listNav
    ]);
});

