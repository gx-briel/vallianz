<?php 
require 'conexao.php'; 
 
$codigo = $_POST['codigo']; 
$nome = $_POST['nome']; 
$estoque = $_POST['estoque']; 
$valor = $_POST['valor']; 
 
$alteracao = "UPDATE produto SET nome='$nome', estoque='$estoque', 
valor='$valor' WHERE codigo ='$codigo' "; 
$execultaAlteracao = mysqli_query($conexao, $alteracao); 
 
if ($execultaAlteracao) { 
    echo "Produto atualizado com sucesso"; 
    header("Location: listarProduto.php");
    exit(0); 
} else { 
    echo "Erro ao atualizar Produto"; 
    header("Location: listarProduto.php");
    exit(0); 
}
?>