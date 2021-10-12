<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\CalculadoraDeImpostos;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());