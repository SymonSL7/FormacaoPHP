<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Usuario;

Route::prefix('v1')->group( function(){

    Route::get('lista', function(){

        return ["a","b","c"];

    });

    Route::post('cadastrar', function(){

        echo 'implementar';

    });

});
