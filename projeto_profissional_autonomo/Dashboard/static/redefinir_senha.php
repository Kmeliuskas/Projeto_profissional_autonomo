<?php 
    include('conexao.php');

    $email = $_GET['h']; //usado para pegar a resposta PHP após enviar o email para o usuário

    $NOK = false;
    $existeConexao = false;
    $senha_diferente = false;

    if(isset($_POST['senha']) ||isset($_POST['confirma_senha'])) {
        $senha = $_POST['senha'];
        $confirma_senha = $_POST['confirma_senha'];
        
        if (strcmp($senha, $confirma_senha) !== 0) { //Função nativa do PHP que verifica se os 2 parametros passados são iguais
            $senha_diferente = true;
        } else {

            $existeConexao = true;

            $senha = $conexao -> real_escape_string($_POST['senha']); // --> Utilizado isto para limpar o campo e não der funerabilidade de ataque de hacker

            //Criando uma Query
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";

            //Rodando a Query
            $sql_query = $conexao -> query($sql_code) or die("Falha na execução do código sql" . $conexao -> error);

            $quantidade  = $sql_query -> num_rows; //Código que vai me retornar quantas linhas a minha consulta retornou

            
            if($quantidade == 1) {

                //Criando uma Query
                $sql_altera = "UPDATE usuarios SET senha = '$senha'  WHERE email = '$email'";

                //Rodando a Query
                $sql_insere = $conexao -> query($sql_altera) or die("Falha na execução do código sql" . $conexao -> error);

                if($sql_insere) {
                   // echo "Senha alterada com sucesso:";
                } else {
                    echo "Não foi alterada a senha";
                  }
            }
            else {
                $NOK = true;
                //echo "Falha ao enserir os dados, E-MAil não econtado na nosa base de dados $email";

            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Ionicons (Icones)-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>

    <!-- Link CSS index.css -->
    <link rel="stylesheet" href="css/index.css">

    

    <title>Redefinir senha</title>
</head>
<body>
    
    <section> <!--- Inicio Section -->
        <div class="form-caixa">
            <div class="form-value">
                 <form action="" method="POST">
                    <h2>Redefinir</h2>
                    <div class="input-caixa">
                        <ion-icon name="key-outline"></ion-icon>
                        <input type="password" name="senha" required>
                        <label for="email">Digite sua nova senha</label>
                    </div>

                    <div class="input-caixa">
                        <ion-icon name="key-outline"></ion-icon>
                        <input type="password" name="confirma_senha" required>
                        <input type="hidden" name="email" value="" id="email">
                        <label for="email">Confirme sua senha</label>
                    </div>

                    <?php 
                        if($existeConexao == true) {
                            ECHO '<p style="color: #00ff00; text-align: center;">Senha alterada com sucesso!</p>';
                        }

                        if($senha_diferente == true) {
                            ECHO '<p style="color: #c00d0d; text-align: center;">As senhas divergem!</p>';
                        }

                        if($NOK == true) {
                            ECHO '<p style="color: #c00d0d; text-align: center;">Senha não foi alterada contate o administrador do sistema</p>';
                        }
                    ?>
                    <button type="submit">Redefinir</button>

                    <div class="registrar">
                        <p>Já tem conta? <a href="login.php">Faça login aqui</a></p>
                    </div>



                 </form>
            </div>
        </div>
    </section> <!--- Fim Section -->
    
</body>
</html>