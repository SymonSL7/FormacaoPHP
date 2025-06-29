<?php

namespace App\Models;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsuarioModel extends Model
{

    protected $connection = "mysql";
    protected $table = "usuario";

    public static function listar(int $limite){

        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limite);

        return $sql->get();

    }

    public static function cadastrar(Request $request){
        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon('now', 'America/Sao_Paulo')
        ]);
    }

}
