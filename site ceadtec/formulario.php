<?php

if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO clientes (nome, cep, cpf, rg, email, data_nasc, telefone)
    VALUES ('$nome', '$cep', '$cpf', '$rg', '$email', '$data_nasc', '$telefone')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to rigth, rgb(20,147,220), rgb(17,54,71));
           }
            .box{
                color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform:translate (-50%,-50%);
                background-color: rgba(0, 0, 0, 0.6);
                padding: 15px;
                border-radius: 15px;
                width: 20%;
            }

            fieldset{
                border: 3px solid dodgerblue;
            }

            legend{
                border: 1px solid dodgerblue;
                padding: 10px;
                text-align: center;
                background-color: dodgerblue;
                border-radius: 8px;
            }

            .inputbox{
                position: relative;
            }

            .inputuser{
             background: none;
             border: none;
             border-bottom: 1px solid white;
             outline: none;
             color: white;
             font-size: 15px;
             width: 100%;
             letter-spacing: 2px;
            }

            .labelinput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }

            .inputuser:focus ~ .labelinput,
            .inputuser:valid ~ .labelinput{
                top: -20px;
                font-size: 12px;
                color: dodgerblue ;
            }

            #data_nascimento{
                border: none;
                padding: 8px;
                border-radius: 10px;
            outline: none;
            font-size: 15px;
            }

            #submit{
                background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;

            }

            #submit:hover{
                background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
            }

        

        
    </style>
</head>

<body>
<a href="home.php">voltar</a>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend> <b>formulario de clientes</b></legend>
                <br>

                <div class="inputbox">
                    <input type="text"name= "nome" id="nome" class="inputuser" required>
                    <label for="nome" class="labelinput">nome completo</label>
                </div>
                <br><br>

                <div class="inputbox">
                        <input type="text" name="cep" id="cep"
                        class="inputuser" required>
                        <label for="cep" class="labelinput">cep</label>
                    </div>
                    <br><br>
 
                    <div class="inputbox">
                        <input type="text" name="cpf" id="cpf"
                        class="inputuser" required>
                        <label for="cpf" class="labelinput">cpf</label>
                    </div>
                    <br><br>

                <div class="inputbox">
                <input type="text" name="rg" id="rg"
                        class="inputuser" required>
                        <label for="rg" class="labelinput">rg</label>
                </div>
                    <br><br>
                   

                    <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputuser" required>
                    <label for="email" class="labelinput">email</label>
                        
                    </div>
                    <br><br>
                        <label for="data_nascimento"><b>data de nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento"
                       required>
                   
                    <br><br><br>
                    
                    <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone"
                        class="inputuser" required>
                        <label for="telefone" class="labelinput">telefone</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>