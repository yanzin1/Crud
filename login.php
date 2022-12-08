<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="aleatorio.js" defer></script>
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(251, 255, 0) , rgb(180, 153, 0));
        }
        
        .telalogin{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            padding:80px;
            border-radius: 15px;
            color: white;

        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button{
            background-color: darkgoldenrod;
            border: none;
            padding: 15px;
            width:100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor:pointer;
        }
        button:hover{
            background-color: black;
        }
        
        .btn-link{
            text-decoration: none;
            border: 1px solid white;
            color: white;
            width: 220px;
            position:absolute;
            text-align: center;


        }

    </style>        
</head>
<body>
    <div class="telalogin">
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input type="token" placeholder="Token">
        <br><br>
        <a class="btn-link" href="sair.php">Entrar</a>
    </div>
    
</body>
</html>