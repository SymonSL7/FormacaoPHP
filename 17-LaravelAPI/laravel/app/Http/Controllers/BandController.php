<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{

    public function getAll() {

        $bands = $this->getBands();

        return response()->json($bands);

    }

    public function getById($id){

        $band = null;

        foreach($this->getBands() as $_band) {

            if($_band['id'] == $id) {
                $band = $_band;
                break;
            }

        }

        if(empty($band)){
            return response()->json('Banda não encontrada', 404);
        }

        return response()->json($band);

    }

    public function getByGender($gender){

        $bands = $this->getBands();
        $filtered = [];

        foreach ($bands as $band) {
            if ($band['gender'] == $gender) {
                $filtered[] = $band;
            }
        }

        if (empty($filtered)) {
            return response()->json('Nenhuma banda encontrada para esse gênero', 404);
        }

        return response()->json($filtered);

    }

    public function store(Request $request) {

        $validate = $request->validate([
            'id'=> 'required',
            'name' => 'required',
            'gender' => 'required'
        ]);

        return response()->json($request->all());

    }

    protected function getBands() {

        return [

            [
                'id' => 1, 'name' => 'Banda 1', 'gender' => 'Gender 1'
            ],
            [
                'id' => 2, 'name' => 'Banda 2', 'gender' => 'Gender 2'
            ],
            [
                'id' => 3, 'name' => 'Banda 3', 'gender' => 'Gender 3'
            ],
            [
                'id' => 4, 'name' => 'Banda 4', 'gender' => 'Gender 4'
            ],
            [
                'id' => 5, 'name' => 'Banda 5', 'gender' => 'Gender 5'
            ],
            [
                'id' => 6, 'name' => 'Banda 6', 'gender' => 'Gender 5'
            ],

        ];

    }

}
