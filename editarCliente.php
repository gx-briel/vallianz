<?php 
require 'conexao.php'; 
?> 
 
<html> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8"> 
    <title>Edição de Cliente</title> 
    <link rel="stylesheet" href="ec.css">
    
</head> 
    <body> 
    <header>
        <img src="icon.png" alt="icone do site">
            <h1>Vallianz Sistemas</h1>
        <a href="index.html"><button type="button" class="home">Início</button></a>
    </header>
    <main>
    <center>
    <font face="Arial" size="15" color="white"> <div>Edição de Cliente </div></font><br><br>
    <?php 
        if (isset($_GET['ID'])) { 
            $idCliente = $_GET['ID']; 
 
            $consulta = "SELECT * FROM cliente where ID ='$idCliente' "; 
            $execultaConsulta = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($execultaConsulta) > 0) { 
                $cliente = mysqli_fetch_array($execultaConsulta); 
        ?> 
        <form action="enviarEdicao.php" method="POST"> 
            <input type="hidden" name="ID" value="<?= $cliente['ID']; ?>"> 
            
            <label>Nome do Cliente</label><br> 
            <input type="text" name="nome" value="<?= $cliente['nome']; ?>"> 
            <br> 
            
            <label>Endereço</label><br> 
            <input type="text" name="endereco" value="<?=$cliente['endereco']; ?>"> 
            <br> 
            
            <label>Telefone</label><br> 
            <input type="text" name="telefone" value="<?=$cliente['telefone']; ?>"> 
            <br><br> 
            <div> 
                <button type="submit" name="atualizar" class="btn btn-success"> Editar Cliente </button> 
            </div> 
        </form> </center>
        <?php 
            } else { 
                echo "<h4>Cliente não encontrado</h4>"; 
            } 
        } else { 
            echo "ID não informado"; 
        } 
        ?> 
    </main>
    <footer>
    <h2>TWITTER DO CRIADOR</h2>
    <a href="https://twitter.com/gx_briel" target="_blank"><button type="button" class="tt">TWITTER</button></a>
        </footer>  
    </body> 
</html> 