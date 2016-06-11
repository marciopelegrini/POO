<?php
require_once "Pessoa.php";

$pessoa1 = new Pessoa();
$pessoa1->nome = "Marcio";
$pessoa1->idade = 60;

echo $pessoa1->correr(50);