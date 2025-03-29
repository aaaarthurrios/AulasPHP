<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta Class</title>
</head>
<body>
    <?php 
    class Caneta {
        // Atributos privados
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;
       public $nome;

       
        // Construtor
        public function __construct($m, $c, $p) {
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar(); // Por padrão, a caneta é tampada ao ser criada
        }

        // Método para tampar a caneta
        public function tampar() {
            $this->tampada = true;
        }

        // Método para destampar a caneta
        public function destampar() {
            $this->tampada = false;
        }

        // Getters e Setters
        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setCor($c) {
            $this->cor = $c;
        }

        public function isTampada() {
            return $this->tampada;
        }
    }

    // Demonstração da classe Caneta
    $caneta1 = new Caneta("BIC", "Azul", 0.5);
    echo "Modelo: " . $caneta1->getModelo() . "<br>";
    echo "Cor: " . $caneta1->getCor() . "<br>";
    echo "Ponta: " . $caneta1->getPonta() . "<br>";
    echo "Tampada: " . ($caneta1->isTampada() ? "Sim" : "Não") . "<br>";

    // Alterando valores usando setters
    $caneta1->setModelo("Faber-Castell");
    $caneta1->setCor("Preto");
    $caneta1->destampar();

    echo "<br>Após alterações:<br>";
    echo "Modelo: " . $caneta1->getModelo() . "<br>";
    echo "Cor: " . $caneta1->getCor() . "<br>";
    echo "Ponta: " . $caneta1->getPonta() . "<br>";
    echo "Tampada: " . ($caneta1->isTampada() ? "Sim" : "Não") . "<br>";
    ?>
</body>
</html>