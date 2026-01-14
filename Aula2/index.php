<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    const MAX = 255;
    echo MAX;

    $idade = 20;
    if($idade >= 18){
        echo "Pode tirar a carta";
    }else{
        echo "Não pode tirar a carta";
    }

    $nota = 10;
    switch($nota){
        case($nota > 10):
            echo "Passaste";
        case($nota >= 10 && $nota <=12):
            echo "Passaste";
            break;
        case($nota < 10):
            echo "Reprovaste";        
            break;
    }
    echo "<br>";
    $i = 1;

    while($i <= 10){
        echo "<br>";
        echo $i;
        $i++;
    }
    echo "<br>";
    do{
        echo $i;
        $i--;
    }while($i > 1);

    for($j=20 ;$j <= 30; $j++){
        echo $j;
        echo "<br>";
    }
echo "<br>";
    $dias_semanas = array("Segunda","Terça","Quarta","Quinta","Sexta","Sabado","Domingo");
echo "<br>";
    foreach($dias_semanas as $d){
        echo $d;
    }

    funtion media($i, $j){
        return ($i + $j)/2;
    }
    echo media(2,3);
    ?>
</body>
</html>