<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        abstract class Veiculo{
            protected $cor;
            abstract protected function mover();
        }

        class Bicicleta extends Veiculo
        {
            public function __construct($cor1)
            {
                $this->cor = $cor1;
            }
            public function mover()
            {
                return "A bicicleta da cor " . $this->cor . " está a mover";  
            }
        }

        class Carro extends Veiculo
        {
            protected $placa;
            public function __construct($placa1,$cor1)
            {
                $this->placa=$placa1;
                $this->cor=$cor1;
            }
            public function mover()
            {
                return "O carro da cor " .  $this->cor . ", com a placa " . $this->placa . " está a mover";
            }
        }

        $carro1 = new Carro("11-aa-22", "Preto");
        echo $carro1->mover();

        echo "<br>";
        
        $bici1 = new Bicicleta("Azul e Cinza");
        echo $bici1->mover();
    ?>
</body>
</html>