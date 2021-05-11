<?php

//conexão com o banco
require '../conexao_banco.php';

//Receber dados do POST
$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
$Nome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
$Nascimento = isset($_POST['Nascimento']) ? $_POST['Nascimento'] : '';
$CPF = isset($_POST['CPF']) ? $_POST['CPF'] : '';

// == <- verifica o valor ; valor  === <- verifica valor e tipo

//validar os dados
if (!empty($Nome) && !empty($Nascimento) && !empty($CPF)) {

    //Se o id foi enviado
    if ($ID !== null) {

        //atualizar
        $sql = "UPDATE paciente SET Nome = '$Nome', Nascimento = '$Nascimento', CPF = '$CPF' WHERE ID = $ID;";

        // se nao
    } else {

        //inserir
        $sql = "INSERT INTO paciente(Nome, Nascimento, CPF) VALUES ('$Nome','$Nascimento','$CPF');";
    }

    //Faz a query
    mysqli_query($con, $sql);

    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Pacientes');
    // se não

} else {

    //retornar para a página pacientes
    header('location: http://localhost/Pokemon_clinical/index.php?pagina=SalvarPaciente&erro=Dados Invalidos');
}
