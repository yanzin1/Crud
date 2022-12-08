<?php

    include_once('connsql.php');


        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        $valorunitario = $_POST['valorunitario'];
        $codbarras = $_POST['codbarras'];

        $sqlUpdate = "UPDATE cadastro SET id='$id',nome='$nome',codigo='$codigo',quantidade='$quantidade',valorunitario='$valorunitario',codbarras='$codbarras'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

        header('location: sistema.php');

  

    
?>