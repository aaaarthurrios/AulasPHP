<?php 
class Caneta{
    var $modelo = "Bic";
   var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    

    function destampar(){
        $this->tampada = false;

}

    function tampar() {
        $this->tampada = true;
       }




    function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO! Não posso rabiscar</p>";
        }else{
            echo "<p>Estou rabiscando</p>";
        }
        
    




        }
       
    }




?>