<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioControllerAPI extends Controller
{

    public function salvar(Request $request) {

        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        if (empty($nome) || empty($email) || empty($senha)) {
            return response("Campos nome, email e senha são obrigatórios", 400);
        }

        $emailExistente = DB::table('usuario')->where('email', $email)->first();
        if ($emailExistente) {
            return response("Email já cadastrado no sistema", 409);
        }

        UsuarioModel::cadastrar($request);
        return response("Usuário Cadastrado!", 200);


    }

}
