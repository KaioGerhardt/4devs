<?php

namespace KaioGerhardt\_4devs;

use KaioGerhardt\_4devs\Modules\CPF;
use KaioGerhardt\_4devs\Modules\CEP;
use KaioGerhardt\_4devs\Modules\Email;

class Validate {

    public static function cpf(string $cpf) {
        $cpf = new CPF($cpf);
        return $cpf->validate();
    }

    public static function cep(string $cep) :bool {
        $cep = new CEP($cep);
        return $cep->validate();
    }

    public static function email(string $email) :bool {
        $email = new Email($email);
        return $email->validate();
    }
}