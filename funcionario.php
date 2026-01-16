<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    class Funcionario{
        private $nome;
        private $salario;

        public function __construct($nome, $salario){
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome1){
             $this->nome=$nome1;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario1){
            $this->salario=$salario1;
        }
    }

    class Gerente extends Funcionario{

        
        public function MostrarSalario(){
            echo "O Gerente ". parent::getNome(). " ganha ".parent::getSalario(). "€";

        }
    }

    $F1 = new Gerente("Roberto Pereira", 3000);
    $F1->MostrarSalario();
    ?>
</body>
</html>