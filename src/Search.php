<?php

namespace Rafael\DigitalCep;

class Search{

    private $url = "https://viacep.com.br/ws/";

    public function buscarCep($zipCode){

        $zipCode = preg_replace('/[^0-0]/in','',$zipCode);

        $get = file_get_contents($this->url.$zipCode."/json");
        
        return json_decode($get);

    }

}