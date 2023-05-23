<?php 
require 'conexao.php'; 
 
$id = $_POST['ID']; 
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$telefone = $_POST['telefone']; 
 
$alteracao = "UPDATE cliente SET nome='$nome', endereco='$endereco', 
telefone='$telefone' WHERE ID ='$id' "; 
$execultaAlteracao = mysqli_query($conexao, $alteracao); 
 
if ($execultaAlteracao) { 
    echo "Cliente atualizado com sucesso"; 
    header("Location: listarCliente.php"); 
    exit(0); 
} else { 
    echo "Erro ao atualizar Cliente"; 
    header("Location: listarCliente.php"); 
    exit(0); 
}
?>