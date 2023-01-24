<?php

namespace RafRodrigo\DigitalCep;

class Search{

    private $url = "https://viacep.com.br/ws/";

    public function buscarCep($zipCode){

        $zipCode = preg_replace('/[^0-9]/','',$zipCode);

        $get = file_get_contents($this->url.$zipCode."/json");
        
        return json_decode($get);

    }

}