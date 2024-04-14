<?php

class Pessoa {
    public $nome;
    public $idade;

    // Criando um método
    public function Falar() {
        echo $this->nome." de ".$this->idade." acabou de falar";
    }

}

// Instanciando uma classe
$rodrigo = new Pessoa();


// var_dump($rodrigo);// esse negocio coisa o objeto.


//Ao acessar o atributo nn precisa do 
// cifrão
$rodrigo->nome = "Rodrigo Santos de 
Oliveira";
$rodrigo->idade = 25;
// echo "$rodrigo->nome <br>";
// echo "Olá sou $rodrigo->nome tenho 
// $rodrigo->idade anos.";

$rodrigo->Falar();



?>