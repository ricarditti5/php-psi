<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        interface OperacaoMatematica
        {
            public function calcular();
        }

        class Soma implements OperacaoMatematica
        {
            public $a;
            public $b;

            public function calcular()
            {
                echo $this->a . " + " . $this->b . " = " . $this->a+$this->b;
            }
        }

        class Subtracao implements OperacaoMatematica
        {
            public $a;
            public $b;

            public function calcular()
            {
                echo $this->a . " - " . $this->b . " = " . $this->a-$this->b;
            }
        }

        class Multiplicacao implements OperacaoMatematica
        {
            public $a;
            public $b;

            public function calcular()
            {
                echo $this->a . " x " . $this->b . " = " . $this->a*$this->b;
            }
        }

        class Divisao implements OperacaoMatematica
        {
            public $a;
            public $b;

            public function calcular()
            {
                echo $this->a . " : " . $this->b . " = " . $this->a/$this->b;
            }
        }
        $s = new Soma();
        echo "Soma";
        echo "<br>";
        $s->a=10;
        $s->b=20;
        $s->calcular();
        echo "<br>";

        $sub = new Subtracao();
        echo "Subtração";
        echo "<br>";
        $sub->a=10;
        $sub->b=20;
        $sub->calcular();
        echo "<br>";

        $m = new Multiplicacao();
        echo "Multiplicação";
        echo "<br>";
        $m->a=10;
        $m->b=20;
        $m->calcular();
        echo "<br>";

        $d = new  Divisao();
        echo "Divisão";
        echo "<br>";
        $d->a=10;
        $d->b=20;
        $d->calcular();
        echo "<br>";
    ?>
</body>
</html>