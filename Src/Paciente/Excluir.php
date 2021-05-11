<?php

//conexão com o banco
require '../conexao_banco.php';

//pagar id
$PacienteID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//tentar excluir do banco de dados
$sql = "DELETE FROM paciente WHERE ID = $PacienteID;";
mysqli_query($con, $sql);

//retornar para a página pacientes
header('location: http://localhost/Pokemon_clinical/index.php?pagina=Pacientes');