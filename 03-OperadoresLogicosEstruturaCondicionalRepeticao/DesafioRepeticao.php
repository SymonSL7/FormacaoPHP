<?php
    $arr = [54, 26, 93, 17, 77, 31, 44, 55, 20];
    $qtdArray = count($arr);

    for ($i=0; $i < $qtdArray -1; $i++) {
        
        for($PosicaoAtual=0; $PosicaoAtual < $qtdArray - $i - 1; $PosicaoAtual++){
            $ProximaPosicao = $PosicaoAtual+1;
            
            if($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {
                $auxiliar = $arr[$PosicaoAtual];
                $arr[$PosicaoAtual] = $arr[$ProximaPosicao];
                $arr[$ProximaPosicao] = $auxiliar;
            }
        }
    }

    print_r($arr);
?>
