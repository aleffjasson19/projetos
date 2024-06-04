<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
 <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to rigth, rgb(20,147,220), rgb(17,54,71));
    }
    .login{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
    border-radius: 15px;
    color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }

    .inputsubmit{
        background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    }
    .inputsubmit:hover{
        background-color: deepskyblue;
    }
    
 </style>
</head>
<body>
    <a href="home.php">voltar</a>
    <div class="login">
        <h1>Login</h1>
        <form action="" method="post">
       <input type="text" name="email" placeholder="email">
       <br><br>
       <input type="password" name="senha" placeholder="senha">
       <br><br>
<input  class="inputsubmit"  type="submit" name="submit" value="enviar">
       </form>
    </div>

    
</body>
</html>