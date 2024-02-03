<?php

use PHPUnit\Framework\TestCase;

use KaioGerhardt\_4devs\Validate;

class ValidateTest extends TestCase {


    public function testValidateCPFValid() {
        $cpf = "017.782.360-73";
        $this->assertTrue(Validate::cpf($cpf)); 
    }

    public function testValidateCPFInvalid() {
        $cpf = "017.782.360-77";
        $this->assertFalse(Validate::cpf($cpf)); 
    }   

    public function testValidateCEPValid() {
        $cep = "93.420-150";
        $this->assertTrue(Validate::cep($cep)); 
    }

    public function testValidateEmailValid() {
        $email = "gerhardt.kaio@gmail.com";
        $this->assertTrue(Validate::email($email)); 
    }
}