<?php
session_start();
include_once 'Header.php'; ?>

<div class="body-container">

    <?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'Home';

    switch ($pagina) {
        case 'Login':
            include_once 'View/Login.php';
            break;
        case 'Home':
            include_once 'View/Home.php';
            /* include_once 'view/teste.php';*/
            break;


        case 'Paciente':
            include_once 'View/Paciente.php';
            break;
        case 'Medico':
            include_once 'View/Medico.php';
            break;

        case 'Consulta':
            include_once 'View/Consulta.php';
            break;
        case 'Salvar_Consulta':
            include_once 'View/Salvar_Consulta.php';
            break;

        case 'Salvar_Medico':
            include_once 'View/Salvar_Medico.php';
            break;
        case 'SalvarPaciente':
            include_once 'View/SalvarPaciente.php';
            break;

        default:
            include_once 'View/Home.php';
            /* include_once 'view/teste.php';*/
    }
    ?>

</div>

<?php include_once 'Footer.php'; ?>