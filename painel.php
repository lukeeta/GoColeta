<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="painel">
    
    <header class="main-menu">

    <nav class="menuPrincipal">
        <img src="src/img/logotipo-branco.svg" alt="GoColeta">
        <?php require_once 'includes/navlinks.php'?>
    </nav>

    </header>

    <div class="painel container">
        <h1>Seja bem vindo <?= isset($_GET['name']) ? "<br>".$_GET['name']: ""?></h1>
        <div class="data">

        </div>
    </div>
    <div id="copyright">
            Gráfica Lura - <?= date('Y')?>
        </div>

</body>
</html>
