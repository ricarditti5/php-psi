<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    class Carro{
        public $marca;
        public $modelo;

        public function mostrar(){
            return "A marca é ".$this->marca." e o modelo é ".$this->modelo;
        }
    }

    $c1 = new Carro();
    $c1->marca="Aston Martin";
    $c1->modelo="Vantage 2025";
    echo $c1->mostrar();
    ?>
</body>
</html>