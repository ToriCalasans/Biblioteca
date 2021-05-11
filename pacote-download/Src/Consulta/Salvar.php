<?php

//conexão com o banco
require '../conexao_banco.php';

//Receber dados do POST
$ID = isset($_POST['ID']) ? $_POST['ID'] : 0;
$Data_Consulta = isset($_POST['Data_Consulta']) ? $_POST['Data_Consulta'] : '';

$ID_Paciente = isset($_POST['ID_Paciente']) ? $_POST['ID_Paciente'] : 0;
$ID_Medico = isset($_POST['ID_Medico']) ? $_POST['ID_Medico'] : 0;

$Data_Agendamento = date('Y-m-d');

// == <- verifica o valor ; valor  === <- verifica valor e tipo

//validar os dados
if (!empty($Data_Consulta) && ($ID_Paciente) != 0  && ($ID_Medico) != 0) {

    //Se o id foi enviado
    if ($ID > 0) {

        //atualizar
        $sql = "UPDATE consulta SET 
          Data_Consulta = '$Data_Consulta',
          ID_Paciente   =  $ID_Paciente,
          ID_Medico     =  $ID_Medico
              WHERE ID = $ID;";

        // se nao
    } else {

        //inserir
        $sql = "INSERT INTO consulta (Data_Agendamento, Data_Consulta, ID_Paciente, ID_Medico) VALUES ('$Data_Agendamento','$Data_Consulta','$ID_Paciente','$ID_Medico');";
    }

    //Faz a query
    mysqli_query($con, $sql);

    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Consulta');
    // se não

} else {

    //retornar para a página pacientes
    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Salvar_Consulta&erro=Dados Invalidos');
}
