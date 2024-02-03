<?php

namespace KaioGerhardt\_4devs;

use KaioGerhardt\_4devs\Modules\CPF;
use KaioGerhardt\_4devs\Modules\CEP;
use KaioGerhardt\_4devs\Modules\Email;

class Generate {

    public static function cpf() :string {
        $cpf = new CPF();
        return $cpf->generate();
    }

    public static function cep() :string {
        $cep = new CEP();
        return $cep->generate();
    }

    public static function email() :string {
        $email = new Email();
        return $email->generate();
    }

}