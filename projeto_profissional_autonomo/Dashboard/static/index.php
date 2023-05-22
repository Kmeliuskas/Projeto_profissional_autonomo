<?php 
    include('conexao.php');

    $NOK = false;
    $existeConexao = false;

    if(isset($_POST['email']) || isset($_POST['senha'])) {
        $existeConexao = true;

        if(strlen($_POST['email']) == 0) {
            //echo "Preencha seu E-mail";
        } else if(strlen($_POST['senha']) == 0) {
            //echo "Preencha sua senha";
        } else {

            $email = $conexao -> real_escape_string($_POST['email']); // --> Utilizado isto para limpar o campo e não der funerabilidade de ataque de hacker
            $senha = $conexao -> real_escape_string($_POST['senha']); // --> Utilizado isto para limpar o campo e não der funerabilidade de ataque de hacker

            //Criando uma Query
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

            //Rodando a Query
            $sql_query = $conexao -> query($sql_code) or die("Falha na execução do código sql" . $conexao -> error);

            $quantidade  = $sql_query -> num_rows; //Código que vai me retornar quantas linhas a minha consulta retornou


            if($quantidade == 1) { // --> Se não existir um usuario ou senha vai retornar 0

                $usuario = $sql_query -> fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start(); // --> Utilizado para criar uma nova sessão
                }

                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome']       = $usuario['nome'];

                header("Location: painel.php"); // --> Redirecionando o usuario para a página de painel.php

            } else {
                $NOK = true;

                //echo "Falha ao logar! E-mail ou senhas incorretos";
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

    <title>Página Login</title>
</head>
<body>
    
    <section> <!--- Inicio Section -->
        <div class="form-caixa">
            <div class="form-value">
                 <form action="" method="POST">
                    <h2>Login</h2>
                    <div class="input-caixa">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-caixa">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="senha" required>
                        <label for="">Senha</label>
                    </div>

                    <div class="esquecer">
                        <label for="marca_box"><input type="checkbox" id="marca_box">Lembre-me</label>
                    </div>

                    <button type="submit">Login</button>

                    <!-- Campos não encontrados no banco de dados-->
                    <?php
                        if($NOK == true) {
                            ECHO '<p style="color: #c00d0d; text-align: center;">Falha no login! E-mail ou senha incorretos.</p>';
                        }
                    ?>

                    <div class="registrar">
                    <p>Esqueceu a senha? <a href="esqueci_senha.php">Clique aqui!</a></p>
                        <p>Não tem uma Conta? <a href="registro.php">Registe-se</a></p>
                    </div>
                 </form>
            </div>
        </div>
    </section> <!--- Fim Section -->
    
</body>
</html>