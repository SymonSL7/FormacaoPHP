<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;

class UsuarioControllerAPI extends Controller
{

    public function salvar(Request $request) {

        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        if (empty($nome) || empty($email) || empty($senha)) {
            return response("Campos nome, email e senha são obrigatórios", 400);
        }

        if(UsuarioModel::cadastrar($request)){
            return response("ok", 200);
        } else {
            return response("error", 409);
        }

    }

}
