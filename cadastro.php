<?php 

    require_once 'config/functions.php';
    require_once 'includes/header.php';

?>

<body class="cadastreSe">

    <header class="main-menu">

        <nav class="menuPrincipal">
            <img src="src/img/logotipo-branco.svg" alt="GoColeta">
            <?php require_once 'includes/navlinks.php'?>
        </nav>

    </header>

    <div class="cadastro container">

        <h1>Cadastre-se para retirada</h1>

        <form action="" id="formCadastro">

            <div class="inputGroup">
                <input type="text" name="name" id="" placeholder="Nome Completo: *" required>
            </div>
            <div class="inputGroup">
                <input type="text" name="email" id="" placeholder="Endereço de Email: *" required>
            </div>
            <div class="inputGroup">
                <input type="text" name="cell" id="tell" placeholder="Celular: *" required>
            </div>
            <div class="inputGroup cep">
                <input type="text" name="cep" id="cep" placeholder="CEP: *" required>
                <small>Atendemos apenas a região de <b>Pirituba - SP</b></small>
            </div>
            <div class="inputGroup address">
                <div class="addressInputs">
                    <input type="text" name="address" id="address" placeholder="Endereço: *" required disabled>
                    <input type="number" name="" id="addressNumber" placeholder="Nº: *" required disabled>
                </div>
                <small id="addressFull"></small>
            </div>
            <div class="inputGroup">
                <input type="text" name="complement" id="" placeholder="Complemento:">
            </div>
            <div class="inputGroup">
                <input type="text" name="reference" id="" placeholder="Referência: *" required>
            </div>
            <div class="inputGroup dateForm">
                <label for="dataRetirada">Selecione o dia para primeira retirada</label>
                <input type="date" name="date" id="dataRetirada" required>
                <small>Marcaremos a próxima retirada após a retirada do primeiro.</small>
            </div>
            <div class="inputGroup hourForm">
                <label for="horaRetirada">Selecione a hora para primeira retirada</label>
                <input type="time" name="hour" id="horaRetirada" required>
            </div>
            <div class="buttons">
                <button type="submit">Cadastrar</button>
            </div>
        </form>

    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script src="src/js/cadastre.js"></script>

</body>

</html>
