<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('link', 'LinkController');

Route::get('/{hash}', function ($hash) {
    $hash = env('APP_URL').'/'.$hash;
    $link = \App\Link::where('hash', $hash)->first();
    if ($link) {
        return redirect($link->url);
    }
    else {
        return abort(404);
    }
});
