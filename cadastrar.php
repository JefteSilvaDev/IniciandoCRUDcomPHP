<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste - Cadastar</title>
    </head>
    <body>
        <h1>Cadastrar</h1>
        <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados);
        ?>
        
        <form name="Cad-usuario" method="POST" action="cadastrar.php"> 
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo"><br><br>
            
            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail"><br><br>
            
            <input type="submit" value="Cadastrar" name="CadUsuario">
           
        </form>
    </body>
</html>
