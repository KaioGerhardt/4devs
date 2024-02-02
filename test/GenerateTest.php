<?php

use PHPUnit\Framework\TestCase;

use KaioGerhardt\_4devs\Generate;
use KaioGerhardt\_4devs\Validate;

class GenerateTest extends TestCase {


    public function testGenerateCPFValid() {
        $cpf = Generate::cpf();
        $this->assertTrue(Validate::cpf($cpf));
    }

    public function testGenerateCEPValid() {
        $cep = Generate::cep();
        $this->assertMatchesRegularExpression('/[0-9]{5}-[0-9]{3}/', $cep);
    }

}