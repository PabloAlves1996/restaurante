<?php
include 'header.php'; // Inclui o cabeçalho
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cardápio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-top: 20px;
        }

        /* Estilos para o botão de pedido pelo WhatsApp */
        .whatsapp-button {
            background-color: #25d366; /* Cor de fundo do botão do WhatsApp */
            color: #fff; /* Cor do texto do botão */
            padding: 5px 10px; /* Preenchimento interno para espaçamento dentro do botão */
            border: none; /* Remover a borda do botão */
            border-radius: 5px; /* Cantos arredondados do botão */
            text-decoration: none; /* Remover sublinhado do link */
        }

        .whatsapp-button:hover {
            background-color: #128C7E; /* Cor de fundo do botão ao passar o mouse */
        }

        /* Ajustar a altura mínima da div .menu-item e alinhar o botão para a direita */
        .menu-item {
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 10px auto; /* Centralizar horizontalmente */
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            min-height: 120px; /* Ajuste a altura mínima conforme necessário */
        }

        .menu-item img {
            max-width: 100px;
            margin-right: 10px;
        }

        /* Alinhar a div com o botão do WhatsApp à direita */
        .wpp {
            margin-left: auto; /* Move para a direita */
        }
    </style>
</head>
<body>
    <h1>Cardápio</h1>

    <div class="menu-item">
        <img src="img/PIZZA.jpg" alt="Pizza Margherita">
        <div>
            <h2>Pizza Margherita</h2>
            <p>Ingredientes: Molho de tomate, mussarela, manjericão.</p>
            <p>Preço: R$ 20</p>
        </div>
        <div class="wpp">
             <!-- Botão de pedido pelo WhatsApp -->
        <a href="https://api.whatsapp.com/send?phone=5521970004929&text=Gostaria%20de%20fazer%20um%20pedido%20de%20uma%20Pizza%20Margherita." class="whatsapp-button">Fazer Pedido</a>
        </div>
    </div>

    <div class="menu-item">
        <img src="img/LASANHA.jpg" alt="Lasanha à Bolonhesa">
        <div>
            <h2>Lasanha à Bolonhesa</h2>
            <p>Ingredientes: Massa de lasanha, molho bolonhesa, queijo.</p>
            <p>Preço: R$ 18</p>
        </div>
        <div class="wpp">
             <!-- Botão de pedido pelo WhatsApp -->
        <a href="https://api.whatsapp.com/send?phone=5521970004929&text=Gostaria%20de%20fazer%20um%20pedido%20de%20uma%20Pizza%20Margherita." class="whatsapp-button">Fazer Pedido</a>
        </div>
    </div>

    <div class="menu-item">
        <img src="img/CARBONARA.jpg" alt="Spaghetti Carbonara">
        <div>
            <h2>Spaghetti Carbonara</h2>
            <p>Ingredientes: Spaghetti, bacon, ovos, queijo parmesão.</p>
            <p>Preço: R$ 15</p>
        </div>
        <div class="wpp">
             <!-- Botão de pedido pelo WhatsApp -->
        <a href="https://api.whatsapp.com/send?phone=5521970004929&text=Gostaria%20de%20fazer%20um%20pedido%20de%20uma%20Pizza%20Margherita." class="whatsapp-button">Fazer Pedido</a>
        </div>
    </div>
</body>

<footer>Pablo Alves da Silva</footer>
</html>
