<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="contato">

    <header class="main-menu">

        <nav class="menuPrincipal">
            <img src="src/img/logotipo-branco.svg" alt="GoColeta">
            <?php require_once 'includes/navlinks.php'?>
        </nav>

    </header>

    <div class="contato container">

        <h1>Entre em contato</h1>

        <form action="" id="formContact">

            <div class="inputGroup">
                <input type="text" name="name" id="" placeholder="Nome Completo: *" required>
            </div>
            <div class="inputGroup">
                <input type="text" name="email" id="" placeholder="Endereço de Email: *" required>
            </div>
            <div class="inputGroup">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="buttons">
                <button type="submit">Enviar</button>
            </div>

        </form>

    </div>
    <div id="copyright">
            Gráfica Lura - <?= date('Y')?>
        </div>

</body>
</html>
