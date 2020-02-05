<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', 'RouteController@index')->where('any', '.*');
