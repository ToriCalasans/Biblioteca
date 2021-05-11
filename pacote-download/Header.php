<!DOCTYPE html>
<!--para fazer automatico, html:5 -->
<!--O atalho para indentar no Visual Studio Code pelo Windows é Shift + Alt + F-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/datatables.min.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <!--escreve link  e escolhe o link: css-->
</head>

<body>

    <header>
        <nav class="navbar sticked-top">
        <div class="container cabecalho">
            <img id="img-logo" src="Img/book_logo.png" alt="Logo">
            <span id="Nome-logo">Biblioteca IFS </span>

            <div>

                <?php if (isset($_SESSION['usuario_fez_login'])) { ?>
                    <a href="?pagina=Paciente"><button id="Nome_botao" class="botao">Pacientes</button></a>
                    <a href="?pagina=Medico"><button id="Nome_botao" class="botao">Médicos</button></a>
                    <a href="sair.php"><button id="Nome_botao" class="botao">Sair</button></a>

                <?php } else { ?>
                    <a href="?pagina=Login"><button id="Nome_botao" class="botao">Login</button></a>
                <?php }  ?>

            </div>
        </div>
        </nav>
    </header>