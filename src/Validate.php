<?php

namespace KaioGerhardt\_4devs;

use KaioGerhardt\_4devs\Modules\CPF;
use KaioGerhardt\_4devs\Modules\CEP;


class Validate {

    public static function cpf(string $cpf) {
        $cpf = new CPF($cpf);
        return $cpf->validate();
    }

    public static function cep(string $cep) :bool {
        $cep = new CEP($cep);
        return $cep->validate();
    }
}