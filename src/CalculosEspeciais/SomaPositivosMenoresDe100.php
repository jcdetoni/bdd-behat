<?php
/**
 * @date 09/07/21
 * @time 15:25
 */

namespace MySys\CalculosEspeciais;


use MySys\Calculadora\Sum;

class SomaPositivosMenoresDe100
{
    public function somar($numero1, $numero2)
    {
        $positivo = ($numero1 >= 0 && $numero2 >= 0);
        $menorQue100 = ($numero1 < 100 && $numero2 < 100);
        if(! $positivo){
            throw new \Exception("Inválido: um dos números é negativo");
        }
        if(! $menorQue100) {
            throw new \Exception("Inválido: um dos números é maior que 100");
        }
        return Sum::execute($numero1, $numero2);
    }

}