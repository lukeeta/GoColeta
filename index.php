<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="home">

    <div id="appRoot" class="display-center">
        <div class="container">
            <nav class="menuPrincipal">
                <?php require_once 'includes/navlinks.php'?>
            </nav>
            <div class="heroContent display-center">
                <img src="src/img/logotipo.svg" alt="GoColeta">
                <p>Cuide do meio ambiente, e despeje seu óleo corretamente com a GoColeta.</p>
                <div class="heroContentBtns">
                    <a href="/ponto-de-retirada.php" class="btn bg-primary txt-primary-dark">PONTOS DE RETIRADA</a>
                    <a href="/cadastro.php" class="btn bg-secundary txt-secundary-dark">CADASTRAR RETIRADA</a>
                </div>
            </div>
            <div id="copyright">
                Gráfica Lura - <?= date('Y')?>
            </div>
        </div>
    </div>
<?php

    require_once 'includes/footer.php';

?>
