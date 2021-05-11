<?php

//conexão com o banco
require '../conexao_banco.php';

//Receber dados do POST
$ID = isset($_POST['ID']) ? $_POST['ID'] : null;
$Nome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
$Area = isset($_POST['Area']) ? $_POST['Area'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';

// == <- verifica o valor ; valor  === <- verifica valor e tipo

//validar os dados
if (!empty($Nome) && !empty($Area) && !empty($Email)) {

    //Se o id foi enviado
    if ($ID !== null) {

        //atualizar
        $sql = "UPDATE medico SET Nome = '$Nome', Area = '$Area', Email = '$Email' WHERE ID = $ID;";

        // se nao
    } else {

        //inserir
        $sql = "INSERT INTO medico(Nome, Area, Email) VALUES ('$Nome','$Area','$Email');";
    }

    //Faz a query
    mysqli_query($con, $sql);

    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Medicos');
    // se não

} else {

    //retornar para a página pacientes
    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Salvar_Medico&erro=Dados Invalidos');
}