<?php 
include('conector.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
mysqli_query($conector, "INSERT INTO clientes (nome, email, telefone, mensagem) VALUES ('$nome','$email','$telefone','$mensagem')");
header("Location: ../../index.html");
exit();
?>