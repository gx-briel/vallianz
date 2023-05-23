<?php 
require 'conexao.php'; 
?> 
 
<html> 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <meta charset="utf-8"> 
    <title>Edição de Produto</title> 
    <style>
        button {
            margin-top: 45;
        }    
        body{
            background-image: url(download.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">

</head> 
   <body> 
   <button type="button" class="btn btn-info btn-lg">
    <a href="listarProduto.php" style="color: purple">Listagem</a></button> 

    <center>
    <br><br>
    <font face="Arial" size="15"> <div>Edição de Produto</div></font><br><br>
    <?php 
    if (isset($_GET['codigo'])) { 
            $codigoProduto = $_GET['codigo']; 
            $consulta = "SELECT * FROM produto where codigo ='$codigoProduto' "; 
            $execultaConsulta = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($execultaConsulta) > 0) { 
                $produto = mysqli_fetch_array($execultaConsulta); 
        ?> 
        <form action="enviarEdicaoPro.php" method="POST"> 
            <input type="hidden" name="codigo" value="<?= $produto['codigo']; ?>"> 
            
            <label>Nome do Produto</label><br> 
            <input type="text" name="nome" value="<?= $produto['nome']; ?>"> 
            <br> 
            
            <label>Estoque</label><br> 
            <input type="text" name="estoque" value="<?=$produto['estoque']; ?>"> 
            <br> 
            
            <label>Valor</label><br> 
            <input type="text" name="valor" value="<?=$produto['valor']; ?>"> 
            <br><br> 
            <div> 
            <button type="submit" name="atualizar" class="btn btn-success"> Editar Produto </button>
            </div> 
        </form> 
        <?php 
            } else { 
                echo "<h4>Produto não encontrado</h4>"; 
            } 
        } else { 
            echo "codigo não informado"; 
        } 
        ?> 
    </body> 
    </html> 