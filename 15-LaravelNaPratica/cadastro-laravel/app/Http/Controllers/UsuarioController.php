<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function cadastrar(){

        return view('usuario.cadastro');

    }

    public function salvar(Request $request){

        $request->validate([

            "nome"=> "required",
            "email"=> "required|email",
            "senha"=> "min:5"

        ]);

        if(UsuarioModel::cadastrar($request)){

            return view('usuario.sucesso', [
                "fulano"=>$request->input('nome')
            ]);

        } else {
            echo "Ops! Falhou ao cadastrar!";
        }

    }

}
