<?php

    use PHPUnit\Framework\TestCase;
    use SSL\DigitalCep\Search;

    class SearchTest extends TestCase {

        /**
        * @dataProvider dadosTeste
        */

        public function testGetAddresFromZipcodeDefaultUsage(string $input, array $resultadoEsperado) {

            $resultado = new Search;

            $resultado = $resultado->getAddresFromZipcode($input);

            $this->assertEquals($resultadoEsperado, $resultado);

        }

        public static function dadosTeste() {
            return [
                "Endereço Praça da Sé" => [
                    "01001000",
                    [
                        "cep"=> "01001-000",
                        "logradouro"=> "Praça da Sé",
                        "complemento"=> "lado ímpar",
                        "unidade"=> "",
                        "bairro"=> "Sé",
                        "localidade"=> "São Paulo",
                        "uf"=> "SP",
                        "estado"=> "São Paulo",
                        "regiao"=> "Sudeste",
                        "ibge"=> "3550308",
                        "gia"=> "1004",
                        "ddd"=> "11",
                        "siafi"=> "7107"
                    ]
                ],
                "Endereço Qualquer" => [
                    "03624010",
                    [
                        "cep" => "03624-010",
                        "logradouro" => "Rua Luís Asson",
                        "complemento" => "",
                        "unidade" => "",
                        "bairro" => "Vila Buenos Aires",
                        "localidade" => "São Paulo",
                        "uf" => "SP",
                        "estado" => "São Paulo",
                        "regiao" => "Sudeste",
                        "ibge" => "3550308",
                        "gia" => "1004",
                        "ddd" => "11",
                        "siafi" => "7107"
                    ]

                ]
                
            ];
        }

    }