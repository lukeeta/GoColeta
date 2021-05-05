<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="login">


    <header class="main-menu">

        <nav class="menuPrincipal">
            <img src="src/img/logotipo-branco.svg" alt="GoColeta">
            <?php require_once 'includes/navlinks.php'?>
        </nav>

    </header>

    <div class="login container">
        <h1>Entrar</h1>
        <form action="" id="formLogin">
            <div class="inputGroup">
                <input type="text" name="email" placeholder="Digite seu email">
            </div>
            <div class="buttons">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
    <div id="copyright">
            Gráfica Lura - <?= date('Y')?>
        </div>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="src/js/login.js"></script>

</body>

</html>
