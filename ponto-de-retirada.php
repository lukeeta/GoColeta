<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="ponto-de-retirada">

    <header class="main-menu">

        <nav class="menuPrincipal">
            <img src="src/img/logotipo-branco.svg" alt="GoColeta">
            <?php require_once 'includes/navlinks.php'?>
        </nav>

    </header>

    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14637.969522684625!2d-46.75272211971996!3d-23.478768155581584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef9523490fe2f%3A0xc4f705c9b01ecd36!2sVila%20Pirituba%2C%20S%C3%A3o%20Paulo%20-%20State%20of%20S%C3%A3o%20Paulo%2C%2002675-031!5e0!3m2!1sen!2sbr!4v1618025131051!5m2!1sen!2sbr"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="pontos container">

        <div class="card">
            <h3>Pinheirinho d'água</h3>
            <p>Estrada de Taipas s/nº - Jaraguá</p>
            <span>Horário de coleta: 6h às 18h</span>
            <b>Telefone: (11) 3928-1691</b>
        </div>
        <div class="card">
            <h3>Jacintho Alberto</h3>
            <p>Rua Talófitos, nº 16 - Pirituba</p>
            <span>Horário de coleta: 8h às 17h</span>
            <b>Telefone: (11) 3994-0947</b>
        </div>
        <div class="card">
            <h3>Anhanguera</h3>
            <p>Av. Fortunata Tadiello Natucci, nº 1000</p>
            <span>Horário de coleta: 6h às 18h</span>
            <b>Telefone: (11) 3917-2406</b>
        </div>
        <div class="card">
            <h3>SUBPREFEITURA PIRITUBA</h3>
            <p>R. Luís Carneiro, nº 193</p>
            <b>Telefone: (11) 3993-6844</b>
        </div>
        <div class="card">
            <h3>Parque Cidade de Toronto</h3>
            <p>Rua Cardeal Motta, nº 84 - Vila Fiat Lux</p>
        </div>

    </div>
    <div id="copyright">
        Gráfica Lura - <?= date('Y')?>
    </div>
</body>

</html>
