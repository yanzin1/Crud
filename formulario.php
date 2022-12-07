<?php
    
    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['codigo']);
        // print_r('<br>');
        // print_r($_POST['quantidade']);
        // print_r('<br>');
        // print_r($_POST['unidade']);
        // print_r('<br>');
        // print_r($_POST['token']);

        include_once('config.php');
        
        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        $unidade = $_POST['unidade'];
        $token = $_POST['token'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,codigo,quantidade,unidade,token)
        VALUES ('$nome','$codigo','$quantidade','$unidade','$token')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="form.css"/>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .inputBox{
            position:relative;
        }
        .inputUser{
            background:none;
            border:none;
            border-bottom: 1px solid white;
            outline:none;
            color:white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .LabelInput{
            
            top:0px;
            left:0px;
            pointer-events: none;
            transition: 0.5s;
        }
        .inputUser:focus ~ .LabelInput{
            top:-20px;
            font-size: 12px;
            color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de produtos</b></legend>
                <br></br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="LabelInput">Nome do Produto</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="number" name="codigo" id="codigo" class="inputUser" required>
                    <label for="nome" class="LabelInput">Codigo do Produto</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="number" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="nome" class="LabelInput">Quantidade</label>    
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="number" name="unidade" id="unidade" class="inputUser" required>
                    <label for="nome" class="LabelInput">Valor por Unidade</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="text" name="token" id="token" class="inputUser" required>
                    <label for="nome" class="LabelInput">Token</label>
                </div>
                <br></br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
    
</body>
</html>