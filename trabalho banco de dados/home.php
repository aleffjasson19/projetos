<!DOCTYPE html>
<html>
<head>
    <title>Meu Site de Moto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Bebas Neue', sans-serif;
        }

        .slideshow {
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            animation: changeBackground 10s infinite;
            height: 100vh; 
        }

        @keyframes changeBackground {
            0%, 100% {
                background-image: url('https://c4.wallpaperflare.com/wallpaper/240/939/621/motorcycle-vehicle-harley-davidson-hd-wallpaper-preview.jpg');
            }
            25% {
                background-image: url('https://c4.wallpaperflare.com/wallpaper/748/538/537/motorcycle-harley-davidson-chopper-bike-wallpaper-preview.jpg');
            }
            50% {
                background-image: url('https://c4.wallpaperflare.com/wallpaper/487/969/289/2018-harley-davidson-softail-fat-bob-wallpaper-preview.jpg');
            }
            75% {
                background-image: url('https://c4.wallpaperflare.com/wallpaper/496/400/48/motorcycles-harley-davidson-wallpaper-preview.jpg');
            }
        }

        .container {
            text-align: center;
            padding: 100px;
        }

        h1 {
            color: #fff;
            font-size: 48px;
        }

        p {
            color: #fff;
            font-size: 24px;
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
        width: 45%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        float: left;
        margin-right: 10px;
    }
    .inputcadastre{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 45%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        float: left;
    }
    .inputsubmit:hover, .inputcadastre:hover{
        background-color: deepskyblue;
    }
    </style>
    
</head>
<body>
    
    <div class="slideshow">
     
        
        <div class="login">
          
            <h1>Login</h1>
             <action="" method="post">
                <input type="text" name="email" placeholder="email">
                <br><br>
                <input type="password" name="senha" placeholder="senha">
                <br><br>
                <input class="inputsubmit" type="submit" onclick="window.location.href='loja.php';" value="Enviar">
                
                <input class="inputcadastre" type="button" onclick="window.location.href='formulario.php';" value="Cadastre">
            
               
            

           </form>
    </div>
</body>
</html>