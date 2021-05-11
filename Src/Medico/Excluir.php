<?php

//conexão com o banco
require '../conexao_banco.php';

//pagar id
$MedicoID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//tentar excluir do banco de dados
$sql = "DELETE FROM medico WHERE ID = $MedicoID;";
mysqli_query($con, $sql);

//retornar para a página pacientes
header('location: http://localhost/Pokemon_clinical/index.php?pagina=Medicos');