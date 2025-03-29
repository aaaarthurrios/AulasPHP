<?php 

 class skate{

public $shape;
public $cor;
public $rolamento; 
public $flip;
public $ollie;


function manobra(){
    if($this -> flip == true){


        echo " Fiz um flip ";
       

    }else{
        echo " Não fiz um flip "; 
       
    }


    
}
 

function manobra2 (){
    if( $this -> ollie == true){

  echo " Fiz um Ollie ";

  }else{ echo " Não fiz um Ollie ";

    
  }
 }
 }
?>