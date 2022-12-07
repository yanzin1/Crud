<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="font.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Cadastro</title>
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
        .btn-link{
            text-decoration: none;
            border: 1px solid white;
            color: white;

        }
    </style>
</head>
<body>
    <div class="box">
        <form  name="formulario" action="enviardados.php" method="POST">
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
                    <input type="number" name="valorunitario" id="valorunitario" class="inputUser" required>
                    <label for="nome" class="LabelInput">Valor por Unidade</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="number" name="codbarras" id="codbarras" class="inputUser" required>
                    <label for="nome" class="LabelInput">Codigo de Barras</label>
                </div>
                <br></br>
                <input type="submit" name="update" id="update">
                <br></br>
                <div>
                <a class="btn-link" href="entrar.php">Visualizar Produtos</a>
                </div>  
                
            </fieldset>
        </form>

    </div>
    
</body>
</html>