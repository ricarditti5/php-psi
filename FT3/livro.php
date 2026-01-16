<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    class Livro{
        private $titulo;
        private $autor;

        public function __construct($titulo, $autor){
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo1){
            $titulo1 = $this->titulo;
        }

        public function getAutor(){
            return $this->titulo;
        }
        public function setAutor($autor1){
            $autor1 = $this->autor;
        }
        
        public function mostrar(){
            return "O Titulo do livro é ".$this->titulo." o autor é ". $this->autor;
        }
    }

    $L1 = new Livro("Noites Brancas","Dotoyevisk");
    echo $L1->mostrar();
    ?>
</body>
</html>