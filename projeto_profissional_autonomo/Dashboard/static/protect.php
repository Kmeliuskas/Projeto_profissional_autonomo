<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_usuario'])) {
    header("Location: erro.php");
    //die("Você não pode acessar está pagina porque não está logado. <p> <a href=\"index.php\">Entrar</a> </p>");
}

?>

