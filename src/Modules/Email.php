<?php

namespace KaioGerhardt\_4devs\Modules;

class Email {

    protected static $email;  

    public function __construct($email = null){
        self::$email = $email;
    }

    public function validate() :bool {
        return filter_var(self::$email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function generate() :string {
        $nameUsers = ['john', 'emma', 'alex', 'sara', 'mike', 'olivia'];
        $domains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'example.com', 'test.org'];

        $user = $nameUsers[array_rand($nameUsers)];
        $domains = $domains[array_rand($domains)];

        $randomCharacters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $randomSequence = substr(str_shuffle($randomCharacters), 0, 5);

        self::$email = $user . $randomSequence . '@' . $domains;

        return self::$email;
    }
}