




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

    $result = mysqli_query($conexao, "INSERT INTO clientes (NOME_CLIENTES, CEP_CLIENTES, CPF_CLIENTES, RG_CLIENTES, EMAIL_CLIENTES, DATANASCIMENTO_CLIENTES, TELEFONE_CLIENTES)
    VALUES ('$nome', '$cep', '$cpf', '$rg', '$email', '$data_nasc', '$telefone')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro motos_online</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    

</head>

<body>

    <div class="slideshow">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend> <b>cadastre-se</b></legend>
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
                        <label for="data_nascimento" class="data_nascimento" ><b>data de nascimento:</b></label>
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