<?php

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-06-06
 * Time: 11:42
 */
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function correr($km)
    {
        echo $this->nome . " está correndo!";
        for ($i = 0; $i < $km; $i++) {
            echo '.';
        }

        echo $this->nome . " Terminou de correr";
    }
}