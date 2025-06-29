<?php

use App\Http\Controllers\API\UsuarioControllerAPI;
use Illuminate\Support\Facades\Route;

use App\Models\UsuarioModel;

Route::prefix('v1')->group( function(){

    Route::get('lista', function(){

        return UsuarioModel::listar(10);

    });

    Route::post('cadastrar', [UsuarioControllerAPI::class, 'salvar']);

});
