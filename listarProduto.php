<?php 
require 'conexao.php'; 
?> 
<html lang="pt-BR"> 
 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8"> 
    <title>Lista de Produtos</title> 
    <style>
        button {
            margin-top: 45;
        }
    </style>
    <style>
.texto-estilizado {
  color: red;
  font-size: 20px;
  font-weight: bold;
}
body{
            background-image: url(download.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
</style>
<style>
		table {
			border-collapse: collapse;
			width: 80%;
            margin: auto;
			text-align: center;
            table-layout: fixed;

		}
		th, td {
			padding: 5px;
			border: 1px solid black;
		}
		th {
			background-color: #4CAF50;
			color: black;
		}

        td {
            background-color: #dcdcdc;
        }
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
        .actions {
            text-align: center;
            line-height: 0.5;
        }
        .no-margin {
            margin: 0;
        }
	</style> 
</head> 
<body> 
    <button type="button" class="btn btn-info btn-lg"><a href="index.html"
    style="color: purple">Início</a></button> <br> <br>
    <center>
    <font face="Arial" size="15" color="white"> <div>Produtos Cadastrados</div></font><br><br> 
    <table> 
        <thead> 
            <tr> 
                <th>Nome</th> 
                <th>Estoque</th> 
                <th>Valor</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php 
            $consulta = "SELECT * FROM produto"; 
            $executaConsulta = mysqli_query($conexao, $consulta); 
 
            if (mysqli_num_rows($executaConsulta) > 0) { 
                foreach ($executaConsulta as $produto) { 
            ?> 
            <tr>  
                <td><?= $produto['nome']; ?></td> 
                <td><?= $produto['estoque']; ?></td> 
                <td><?= $produto['valor']; ?></td> 
                </tr>
           <td class = "actions"> <br>
                <button type="button" class="btn btn-primary no-margin"><a href= "editarProduto.php?codigo=<?= $produto['codigo']; ?>"style="color: black" >Editar</a></button> 
                <button type="button" class="btn btn-danger no-margin"><a href= "excluirProduto.php?codigo=<?= $produto['codigo']; ?>"style="color: white" >Excluir</a></button>
                </td>
                </tr> 
            <?php 
                } 
            } else { 
                echo "<h3 class='texto-estilizado'>Nenhum Produto Cadastrado!</h3>";
            } 
            ?> 
        </tbody> 
    </table> 
    <button type="button" class="btn btn-dark"><a href="cadastroProduto.html" style="color: white">Cadastrar mais produtos</a></button>
        </center>
</body> 
</html> 