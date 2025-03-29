
<?php 

class moto{

    public $nome;
    public $color;
    public $year;
    public $km;
    public $price;	
     public $correr;


     function run (){
          
 if( $this -> correr== true){
echo " a moto está correndo ";

 }else{

echo " a moto não está correndo ";
 }

}
}

?>