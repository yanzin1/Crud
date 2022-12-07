<?php

        include_once('connsql.php');

            $nome = $_POST['nome']; 
            $codigo = $_POST['codigo'];
            $quantidade = $_POST['quantidade'];
            $valorunitario = $_POST['valorunitario'];
            $codbarras = $_POST['codbarras'];

        try{
            $sql = "INSERT INTO cadastro (nome,codigo,quantidade,valorunitario,codbarras)
            VALUES ('$nome',$codigo,$quantidade,$valorunitario,$codbarras)";
        
            $insertsql = mysqli_query ($conexao, $sql);
            
        } catch(\Exception $e){
            echo "erro: ".$e;
            die;
        }
        header("Location: formulario.php");
   
?>