<?php 
require("conexao.php"); 
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$telefone = $_POST['telefone']; 
$insereCliente = "INSERT INTO cliente(nome, endereco, telefone) VALUES 
('$nome','$endereco','$telefone')"; 
$operacaoSQL = mysqli_query($conexao, $insereCliente); 
if (mysqli_affected_rows($conexao) != 0) { 
    echo "Cliente cadastrado com Sucesso!"; 
    header("Location: listarCliente.php"); 
} else { 
    echo " O Cliente não foi cadastrado com Sucesso!"; 
header("Location: listarCliente.php"); 
}?>