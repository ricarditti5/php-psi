<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    class Pessoa{
        public $nome;
        public $idade;

        public function apresentar(){
            return "Eu sou o, ".$this->nome;
        }
    }
        $p1 = new Pessoa();
        $p1->nome = "Ricardo";
        echo $p1->apresentar();
    ?>
</body>
</html>