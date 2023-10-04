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
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);    
    $sql = "select * from usuario where login = '$login' and senha = '$senha'";    
    $resultado = mysqli_query($con, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        // output data of each row
        echo "<h1>Login Efetuado com sucesso!!</h1>";
    } else {
        echo "<h1>Usuário e/ou Senha Inexistentes!! </h1>";
    }
  ?>
</body>
</html>