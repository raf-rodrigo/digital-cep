<?php

use \Rafael\DigitalCep\Search;

require 'vendor/autoload.php';

$busca = new Search;

$resultado = $busca->buscarCep('01001-000');

print_r($resultado);
