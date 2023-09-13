<?php
include 'header.php'; // Inclui o cabeçalho
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cantina Italiana</title>

    <style>
        
         h1 {
            text-align: center; /* Centraliza horizontalmente o texto */
            margin-top: 20px; /* Define um espaçamento superior para alinhar verticalmente abaixo do cabeçalho */
        }

        .info {
            text-align: left;
            margin: 20px auto; /* Centraliza horizontalmente e aplica margem superior/inferior */
            max-width: 600px; /* Largura máxima da div para controle de centralização */
        }

        /* Estilos para o mapa */
        iframe {
            width: 100%;
            height: 400px; /* Ajuste a altura do mapa conforme necessário */
            border: none; /* Remove a borda do iframe */
        }

        .endereco {
            text-align: left;
            margin: 20px auto; /* Centraliza horizontalmente e aplica margem superior/inferior */
            max-width: 600px; /* Largura máxima da div para controle de centralização */
        }

    </style>
    
</head>
<body>
    <h1>Bem-vindo à Cantina Italiana</h1>

    <br>

    <div class="info">
        <p><strong>História:</strong> A Cantina Italiana é uma das mais antigas e respeitadas trattorias da cidade. Fundada em 1950, nossa cantina tem uma rica história de servir autêntica comida italiana com paixão e dedicação.</p>
    </div>

    <br><br><br>

     <!-- Mapa incorporado -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1148621170555!2d-43.51291542386279!3d-22.72397173136468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x995d10850b2911%3A0xe53413fe5cd0c0f4!2sR.%20Fil%C3%B3%20-%20Tinguazinho%2C%20Nova%20Igua%C3%A7u%20-%20RJ%2C%2026080-200!5e0!3m2!1sen!2sbr!4v1694627292663!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>

        <br><br>

        <div class="endereco">
        <p><strong>Endereço:</strong> Rua Filó</p>
        <p><strong>Como Chegar:</strong> A Cantina Italiana fica no coração da cidade e é facilmente acessível de carro, ônibus ou metrô.</p>
    </div>
</body>


<footer>Pablo Alves da Silva</footer>

</html>
