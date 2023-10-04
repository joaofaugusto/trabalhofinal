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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        // Cria uma conexão com o banco de dados: JA -> 04/10 16:26
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão: JA -> 04/10 16:26
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }

        $nomeempresa = $_GET["nomeEmpresa"];
        $razaosocial = $_GET["razaoSocial"];
        $cnpj = $_GET["cnpj"];
        $nomeresponsavel = $_GET["nomeResponsavel"];
        $userresponsavel = $_GET["userResponsavel"];
        $senharesponsavel = $_GET["senhaResponsavel"];
        // Função para inserir um registro: JA -> 04/10 16:26
        function inserirRegistro($conn) {
            
            $stmt = $conn->prepare("INSERT INTO empresa2 (nomeempresa, razaosocial, cnpj, nomeresponsavel, userresponsavel, senharesponsavel) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nomeempresa, $razaosocial, $cnpj, $nomeresponsavel, $userresponsavel, $senharesponsavel);
            
            if ($stmt->execute()) {
                echo "Registro inserido com sucesso.<br>";
            } else {
                echo "erro ao registrar";
            }
            
            $stmt->close();
        }
        inserirRegistro($conn);

        $conn->close();
    ?>

        
</body>
</html>