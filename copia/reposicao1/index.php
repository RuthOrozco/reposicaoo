<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $nome="RUTH";
     echo "Nome : " .$nome;
     $nome = strtolower($nome);
     echo "<br>Nome : ".$nome;     
     $salario = 5000.00;
     echo "<br>Salario :" .$salario;
     echo "<br>Salario R$" .number_format($salario,2,",",".");

    ?>
    <br>
    <a href="formulario1.php">Formulário 1</a>
    <br>
    <a href="formulario2.php">Formulário 2</a>
</body>
</html>