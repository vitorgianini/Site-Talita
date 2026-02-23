<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    $para = "SEUEMAIL@gmail.com"; // COLOQUE O EMAIL REAL AQUI
    $assunto = "Novo contato pelo site";

    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n\n";
    $corpo .= "Mensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($para, $assunto, $corpo, $headers)) {
        echo "<h2>Mensagem enviada com sucesso!</h2>";
        echo "<a href='index.html'>Voltar</a>";
    } else {
        echo "<h2>Erro ao enviar mensagem.</h2>";
    }
}
?>