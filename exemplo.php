<?php

use \Rafael\DigitalCep\Search;

require 'vendor/autoload.php';

$busca = new Search;

$resultado = $busca->buscarCep('04271-060');

print_r($resultado);
