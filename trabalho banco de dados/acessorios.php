<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos para Venda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin: 30px 0;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
            align-items: center;
        }

        .image {
            margin: 20px;
            flex: 0 0 calc(33.33% - 40px);
            max-width: calc(33.33% - 40px); 
        }

        .image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .image h2 {
            margin: 10px 0;
        }

        .image p {
            color: #777;
        }
    </style>
</head>

<body>
    <h1>acessorios</h1>

    <div class="gallery">
        <div class="image">
            <img src="img/guidao.png" alt="Moto 1">
            <h2>guidao</h2>
            <h2>R$ 27,00</h2>
        </div>

        <div class="image">
            <img src="img/manopla.jpg" alt="Moto 2">
            <h2>manopla</h2>
            <p>R$ 10,00</p>
        </div>

        <div class="image">
            <img src="img/filtr ar.jpg" alt="Moto 3">
            <h2>filtro ar</h2>
            <h2>R$ 15,00</h2>
        </div>

    </div>
    <div class="gallery">
        <div class="image">
            <img src="img/jogo junta.webp" alt="Moto 1">
            <h2>jogo junta</h2>
            <h2>R$ 10,00</h2>
        </div>

        <div class="image">
            <img src="img/filtro-oleo-yamaha-ys-150-ybr-150-2014-a-2021-tecfil-pl249-hipervarejo-3.webp" alt="Moto 2">
            <h2>filtro oleo</h2>
            <h2>R$ 6,00</h2>
        </div>

        <div class="image">
            <img src="img/oleo.webp" alt="Moto 3">
            <h2>oleo</h2>
            <h2>R$ 20,00</h2>
        </div>
</body>

</html>
