<?php
    include_once ('connsql.php');

    $sql = "SELECT * FROM cadastro ORDER BY id DESC";

    $insertsql = mysqli_query ($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Sistema Cadastro</title>
    <style>
        
        body{
        background-image: linear-gradient(to right, rgb(251, 255, 0) , rgb(180, 153, 0));
    }

    .navbar-brand{
        color:white;
    }

    .table-bg{
        background: rgba(0, 0, 0, 0.5);
        border-radius: 15px 15px 0 0;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BACK WASH</a>
        <button class="navbar-toggler" type="" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        </div>
    </div>
    <div class="d_flex">
        <a href="sair.php" class= "btn btn-danger me-5">Sair</a>
    </div>
    </nav>
    <br>
    <h1>Lista de Produtos Cadastrados</h1>
    </br>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Codigo de Barras</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($insertsql))
                    {
                        echo "<tr>";
                        echo "<td>" .$user_data['id'] ."</td>";
                        echo "<td>" .$user_data['nome'] ."</td>"; 
                        echo "<td>" .$user_data['codigo'] ."</td>"; 
                        echo "<td>" .$user_data['data_cadastro'] ."</td>"; 
                        echo "<td>" .$user_data['quantidade'] ."</td>"; 
                        echo "<td>" .$user_data['valorunitario'] ."</td>";   
                        echo "<td>" .$user_data['codbarras'] ."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='c  urrentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                            </svg> 

                            <a class='btn btn-sm btn-danger' href='#'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                            </svg>
                        </td>";
                                     
                        echo "</tr>";                
                    }
                ?>
            </tbody
        </table>
    </div>
</body>
</html>
