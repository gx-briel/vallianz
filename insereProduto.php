<?php 
echo "oi";
require("conexao.php"); 
$nome = $_POST['nome']; 
$estoque = $_POST['estoque']; 
$valor = $_POST['valor']; 
$insereProduto = "INSERT INTO produto(nome, estoque, valor) VALUES 
('$nome','$estoque','$valor')"; 
$operacaoSQL = mysqli_query($conexao, $insereProduto); 
if (mysqli_affected_rows($conexao) != 0) { 
    echo "Produto cadastrado com Sucesso!"; 
    header("Location: listarProduto.php"); 
} else { 
    echo " O Produto não foi cadastrado com Sucesso!"; 
    header("Location: listarProduto.php"); 
}
?>