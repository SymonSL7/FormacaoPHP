<?php

    namespace SSL\DigitalCep\ws;

class ViaCep
{
    private $url = "https://viacep.com.br/ws/";


    public function get(string $zipCode): array
    {

        $get = $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}
