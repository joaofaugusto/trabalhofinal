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
        // Ainda não completo: JA -> 04/10 16:49
        $nomeempresa = $_GET["nomeEmpresa"];
        $razaosocial = $_GET["razaoSocial"];
        $cnpj = $_GET["cnpj"];
        $nomeresponsavel = $_GET["nomeResponsavel"];
        $userresponsavel = $_GET["userResponsavel"];
        $senharesponsavel = $_GET["senhaResponsavel"];
        echo "<div class='informacoes><h5>Nome Empresa:" . $nomeempresa . "</h5></div>'";
    ?>
</body>
</html>