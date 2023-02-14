<?php

use \RafRodrigo\DigitalCep\Search;

require 'vendor/autoload.php';

$busca = new Search;

$resultado = $busca->buscarCep('13600001');

print_r($resultado);