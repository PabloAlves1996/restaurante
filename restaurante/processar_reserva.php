<!DOCTYPE html>
<html>
<head>
    <title>Processar Reserva</title>
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
        }
    </style>
</head>
<body>
    <h1>Reserva Confirmada</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        echo "Olá, $nome! Sua reserva para $data às $hora foi confirmada.";
    }
    ?>
</body>
</html>
