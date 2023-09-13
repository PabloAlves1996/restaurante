<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    <title>Seu Site</title>

    <style>

        *{
            margin: 0;
            padding: 0;
        }

        /* Estilos para o cabeçalho */
        header {
            background-color: #f4e7d0;
            padding: 20px;
            display: flex; /* Usando flexbox para alinhar a logo e o menu */
            justify-content: space-between; /* Alinha os elementos à esquerda e à direita */
            align-items: center; /* Alinha os elementos verticalmente no centro */
            font-family: 'Georgia', serif;
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }

        nav {
            text-align: center; /* Centraliza o conteúdo horizontalmente */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: inline-block; /* Faz a lista comportar-se como um bloco para centralização horizontal */
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #693c0f;
            font-size: 18px;
        }

        /* Efeito hover nos links do menu */
        nav ul li a:hover {
            color: #956f43;
        }

    </style>
</head>
<body>
    <header>
    <div class="logo">
        <a href="index.php"> <!-- Substitua "index.php" pelo caminho da sua página inicial -->
            <img src="img/LOGO.png" alt="Logo da empresa">
        </a>
    </div>
        <nav>
            <ul>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservas.php">Reservas de Mesas</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
