<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{

    public function hello($name, Request $request) {

        return response()->json([
            'oi' => "Hello {$name}",
            'tchau' => $request->all()
        ]);

    }

}
