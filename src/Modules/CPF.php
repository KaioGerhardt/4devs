<?php

namespace KaioGerhardt\_4devs\Modules;

class CPF {

    protected static $cpf;

    public function __construct(string $cpf = null) {          
        self::$cpf = $cpf;
    }

    public function validate() :bool { 
        $cpf = preg_replace( '/[^0-9]/is', '', self::$cpf );
        
        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    public function generate() :string {
        $numeros = '';
        for ($i = 0; $i < 9; $i++) {
            $numeros .= rand(0, 9);
        }
    
        $digitos = '';
        for ($i = 0; $i < 2; $i++) {
            $soma = 0;
            for ($j = 0; $j < 9 + $i; $j++) {
                $soma += (int) $numeros[$j] * (10 + $i - $j);
            }
            $digito = 11 - $soma % 11;
            $digitos .= $digito >= 10 ? 0 : $digito;
        }
    
        return implode('.', str_split($numeros, 3)) . '-' . (string) $digitos;
    }
}