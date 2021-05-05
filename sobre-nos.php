<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="sobre">

    <header class="main-menu">

        <nav class="menuPrincipal">
            <img src="src/img/logotipo-branco.svg" alt="GoColeta">
            <?php require_once 'includes/navlinks.php'?>
        </nav>

    </header>

    <div class="sobre container">

        <h1>Sobre Nós</h1>

        <div class="text">
            <p><b>Missão:</b> A GoColeta tem como propósito de existência melhorar sustentavelmente o bairro de Pirituba com a coleta de óleo, para que haja menos problemas ambientais e também, possamos nos tornar referência neste nicho e de sustentabilidade.</p>
            <p><b>Visão:</b> Queremos nos tornar a maior empresa de coleta de óleos do estado de São Paulo.</p>
            <p><b>Valor:</b> Foco, dedicação e comprometimento é o que exigimos de nossos colaboradores, pois é isso que queremos que a empresa reflita. Transformamos a confiabilidade dos habitantes de Pirituba em qualidade nos nossos serviços.</p>
            <hr>
            <p>Com a GoColeta, você ajuda muita gente!<br>
            Parte do dinheiro arrecadado com a venda dos nossos produtos, é revertido para as ONG's.<br>
            Venha contribuir e fazer parte desse movimento!</p>
        </div>

    </div>

    <div id="copyright">
            Gráfica Lura - <?= date('Y')?>
        </div>

</body>
</html>
