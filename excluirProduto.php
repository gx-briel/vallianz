<?php 
require 'conexao.php'; 
 
$codigo         = $_GET['codigo']; 
 
$exclusao = "DELETE from produto WHERE codigo ='$codigo' "; 
$execultaExclusao = mysqli_query($conexao, $exclusao); 
 
if ($execultaExclusao) { 
    echo "Produto excluído com sucesso"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} else { 
    echo "Erro ao excluir Cliente"; 
    header("Location: listarProduto.php"); 
    exit(0); 
} ?>