<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HelloWordController;
    use App\Http\Controllers\BandController;

   /*
   Route::get('hello/{name}', function($name){
        return "Hello " . $name;
    });

    Route::get('hello-post/{name}', [HelloWordController::class, 'hello']);
    */

    Route::get('bands', [BandController::class, 'getAll' ]);
    Route::get('bands/{id}', [BandController::class, 'getById' ]);
    Route::get('bands/gender/{gender}', [BandController::class, 'getByGender' ]);
    Route::post('bands/store', [BandController::class, 'store' ]);

