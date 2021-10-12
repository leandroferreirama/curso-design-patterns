<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, string $tipo): float
    {
        switch($tipo)
        {
            case 'ICMS':
                return $orcamento->valor * 0.1;
                break;

            case 'ISS':
                return $orcamento->valor * 0.06;
                break;
        }
    }
}