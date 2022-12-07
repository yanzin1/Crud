<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        $valorunitario = $_POST['valorunitario'];
        $codbarras = $_POST['codbarras'];

        $sqlUpdate = "UPDATE cadastro SET nome='$nome',codigo='$codigo',valorunitario='$valorunitario',,codbarras='$codbarras'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }

    header('location: sistema.php');
?>