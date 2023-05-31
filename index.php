<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Array é uma lista onde pode adicionar e procurar itens adicionados

    //Criando um array com o nome de futas e os valores maçã banana laaranja e morango

    $frutas = array("maçã", "banana", "laranja", "morango");

    //imprimindo o array na tela

    print_r($frutas);

    //Inserindo um novo valor [abcaxi] dentro do array $frutas:

    $frutas[4] = "abacaxi";
    echo "<br>";
    print_r($frutas);

    // É possivel utilizar outra forma:
    //  array_push($frutas, "Abacaxi");

    //Alterando o valor abacaxi[4] por uva
    $frutas[4] = "uva";
    echo "<br>";
    print_r($frutas);

    //removendo array valor maça

    unset ($frutas[0]);
    echo "<br>";
    print_r($frutas);

    echo "<br>";

    // ordenação do array
    sort($frutas);

    print_r($frutas);

    // utilizando o laço de repetição para exibir todos os items da array $frutas
echo "<br>";
    foreach($frutas as $fruta){
        echo $fruta . "<br>";
    }
    ?>
</body>
</html>