<?php 
require 'conexao.php'; 
 
$id         = $_GET['ID']; 
 
$exclusao = "DELETE from cliente WHERE ID ='$id' "; 
$execultaExclusao = mysqli_query($conexao, $exclusao); 
 
if ($execultaExclusao) { 
    echo "Cliente excluído com sucesso"; 
    header("Location: listarCliente.php"); 
    exit(0); 
} else { 
    echo "Erro ao excluir Cliente"; 
    header("Location: listarCliente.php"); 
    exit(0); 
} 