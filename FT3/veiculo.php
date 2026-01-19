<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    abstract class Veiculo
    {
        protected $placa;
        protected $cor;
        abstract protected function mover(); 
    }

    class Bicicleta extends Veiculo
    {
         public function __construct($placa, $cor){
            $this->placa = $cor;
            $this->salario = $cor;
        }  
        protected function mover(){
            return "A Bicicleta está a mover-se";
        }
    }
    class Carro extends Veiculo
    {
        protected function mover(){
            return "O Casrro está a mover-se";
        }
    }
    ?>  
</body>
</html>