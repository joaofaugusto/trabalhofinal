<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Senha</title>
</head>
<body>
<?php
    include "conexao.php";
    $senha = md5($_POST['senha']);
    $codigo = 9;
    $sql = "update usuario set senha = '$senha' where codigo = $codigo";

    if (mysqli_query($con, $sql)) {
      echo "Senha Alterada com sucesso!!";
    } else {
      echo "Falha ao adicionar registro: " . $sql . "<br>" . mysqli_error($con);
    }
  ?>
</body>
</html>