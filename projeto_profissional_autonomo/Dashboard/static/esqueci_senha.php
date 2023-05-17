<?php /*
    include('conexao.php');

*/?>

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

    <title>Página Recuperar</title>
</head>
<body>
    
    <section> <!--- Inicio Section -->
        <div class="form-caixa">
            <div class="form-value">
                 <form action="recuperar_senha.php" method="POST" id="meuLink">
                    <h2>Recuperar Senha</h2>
                    <div class="input-caixa">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                        <input type="hidden" name="nome">
                        <input type="hidden" name="destinatario">
                        <input type="hidden" name="mensagem">
                    </div>

                    <button type="submit" name="recuperar">Recuperar</button>

                 </form>
            </div>
        </div>
    </section> <!--- Fim Section -->
    
</body>
</html>

<script>
    // Obtém a URL do link
    var linkUrl = document.getElementById("meuLink").href;

    // Armazena a URL na sessão do navegador
    sessionStorage.setItem("linkUrl", linkUrl);
</script>