<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct(){
        echo 'Um objeto foi criado <br/>';
    }
    function perfil(){
        echo "Eu sou " . $this->nome .'<br />';
        echo "Eu tenho " . $this->idade .' anos de idade.<br />';

    }

}
$p1 = new Pessoa();

$p1->nome = "Maria";
$p1->idade =13;
$p1->perfil();