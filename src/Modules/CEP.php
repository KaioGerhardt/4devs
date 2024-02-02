<?php

namespace KaioGerhardt\_4devs\Modules;

class CEP {

    protected static $cep;  

    public function __construct($cep = null){
        self::$cep = $cep;
    }

    public function validate() :bool {
        $cep = preg_replace('/[^0-9]/', '', self::$cep);

        if (strlen($cep) != 8) {
            return false;
        }

        return true;
    }

    public function generate() :string {
        $cep = rand(10000, 99999) . '-' . rand(100, 999);
        return $cep;
    }

}