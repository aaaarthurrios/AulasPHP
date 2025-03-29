<?php
class Carro02
{


    private $nome;
    private $cor;
    private $ano;
    private $modelo;
    private $correr;



public function __construct($n,$m, $c ,$a){ //Método construtor
    $this->setModelo($m);
   //$this -> modelo = $m;
   $this -> cor = $c;
   $this -> ano = $a;
   $this -> nome = $n;
   $this->acelerar();

}

public function acelerar(){
    $this -> correr = true;
}

    public function getNome(){
        return $this->nome;

    }

    public function setnome($n){
        $this->nome = $n;

    }
    public function getAno(){
        return $this ->ano;

    }

    public function setAno($a){
        $this ->ano = $a;


    }


    public function getModelo(){
        return $this->modelo;
}

public function setModelo($m){
    $this->modelo = $m;
}

}


?>