<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['recuperar'])) {
    $destinatario = $_POST['email'];
    //$codigoRedefinicao = generateCodigoRedefinicao(); // Gere um código único para a redefinição de senha
    $urlRedefinicao = 'http://localhost/projeto_profissional_autonomo/Dashboard/static/redefinir_senha.php?h=' . $destinatario; // URL com o código de redefinição
    //$urlRedefinicao = 'http://localhost/01%20-%20Curso_ténico_IFSC/08%20-%20Conclusão%20de%20Curso%20Técnico/Aula%2006/projeto_profissional_autonomo/Dashboard/php/redefinir_senha.php?&h=' . $destinatario; // URL com o código de redefinição TESTE

    $mensagem = '
        <div>
            <p><b>Olá!</b></p>
            <p>Você recebeu este email porque recebeu uma solicitação para redefinir a senha em sua conta.</p>
            <br>
            <p> <button><a href="' . $urlRedefinicao . '">Clique aqui para redefinir</a></button></p>
        </div>
    ';

    $mail = new PHPMailer(true);

    // Configurações do Servidor
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'matteokmeliuskas@gmail.com';
    $mail->Password = 'vjdbsfrijjdpqlow';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->isHTML(true);
    $mail->setFrom('matteokmeliuskas@gmail.com', 'Profissional autonomo');
    $mail->addAddress($destinatario);
    $mail->Subject = 'Recuperar senha';
    $mail->Body = $mensagem;

    if ($mail->send()) {
        // Envio de email bem-sucedido
        header("Location: resposta.php");
    } else {
        // Ocorreu um erro ao enviar o email
        echo 'Ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.';
    }
}
?>