<?php 
require 'conexao.php'; 
?> 
<html lang="pt-BR"> 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8"> 
    <title>Listagem de Clientes</title> 
    <link rel="stylesheet" href="lc.css">
</head> 
<body> 
<header>
        <img src="icon.png" alt="icone do site">
            <h1>Vallianz Sistemas</h1>
        <a href="index.html"><button type="button" class="home">Início</button></a>
    </header>

    <main>
    <center>
<div class="texto">Clientes Cadastrados</div>
    <table> 
        <thead> 
            <tr> 
                <th>Nome</th> 
                <th>Endereço</th> 
                <th>Telefone</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php 
            $consulta = "SELECT * FROM cliente"; 
            $executaConsulta = mysqli_query($conexao, $consulta); 
 
            if (mysqli_num_rows($executaConsulta) > 0) { 
                foreach ($executaConsulta as $clientes) { 
            ?> 
            <tr> 
                <td><?= $clientes['nome']; ?></td> 
                <td><?= $clientes['endereco']; ?></td> 
                <td><?= $clientes['telefone']; ?></td> 
            </tr> 
            <td class = "actions"> <br>
            <button type="button" class="btn btn-primary no-margin"><a href="editarCliente.php?ID=<?= $clientes['ID']; ?>" style="color: Black">Editar</a></button>
            <button type="button" class="btn btn-danger no-margin"><a href="excluirCliente.php?ID=<?= $clientes['ID']; ?>" style="color: white">Excluir</a> </button>
            </td>
            <?php 
                } 
            } else { 
                echo "<h3 class='texto-estilizado'>Nenhum Cliente Cadastrado!</h3>";
            } 
            ?>  <br><br><br>
        </tbody> 
    </table> 
    <button type="button" class="btn btn-dark"><a href="cadastroCliente.html" style="color: white">Cadastrar mais clientes</a></td></button>
        </center></main>
        <footer>
        <h2>TWITTER DO CRIADOR</h2>
        <a href="https://twitter.com/gx_briel" target="_blank"><button type="button" class="tt">TWITTER</button></a>
    </footer>   
</body> 
</html> 