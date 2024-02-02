<?php

namespace KaioGerhardt\_4devs;

use KaioGerhardt\_4devs\Modules\CPF;
use KaioGerhardt\_4devs\Modules\CEP;

class Generate {

    public static function cpf() :string {
        $cpf = new CPF();
        return $cpf->generate();
    }

    public static function cep() :string {
        $cep = new CEP();
        return $cep->generate();
    }

}