<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Criar Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <h3>JP Consultas</h3>
    <form action="retornar.php" method="get">
        <!--Entradas para a criação de login: JA -> 04/10 15:47-->
        <label>Nome da empresa:</label><br>
        <input type="text" name="nomeEmpresa"><br>
        <label>Razão social da empresa:</label><br>
        <input type="text" name="razaoSocial"><br>
        <label>CNPJ da empresa:</label><br>
        <input type="text" name="cnpj" id="cnpj" onblur="verifica_cnpj()"><br>
        <label>Nome do Responsável</label><br>
        <input type="text" name="nomeResponsavel" id="user" onblur="verifica_user()"><br>
        <label>Usuário do Responsável</label><br>
        <input type="text" name="userResponsavel"><br>
        <label">Senha do Responsável</label><br>
        <input type="password" name="senhaResponsavel" id="senha" onblur="verifica_senha()"><br><br>
        <input type="submit" value="Criar">
        <input type="reset" value="Cancelar">
    </form>
    <script>
        // Métodos de verificação dos campos: JA -> 04/10 15:56
        function verifica_cnpj(){
            var cnpj = getElementById("cnpj").value;
            tamanhocnpj = cnpj.length;
            if (tamanhocnpj > 14) {
                alert("CNPJ não válido");
            } 
        }
        function verifica_user() {
            var user = getElementById("user").value;
            tamanhouser = user.length;
            if (tamanhouser < 5 || tamanhouser > 20) {
                alert("Tamanho do nome do usuário inválido");
            }
        }
        function verifica_senha() {
            var senha = getElementById("senha").value;
            tamanho_senha = senha.length;
            if (tamanho_senha == 0) {
                alert("O campo senha deve ser preenchido");
            }
        }
    </script>
</body>
</html>