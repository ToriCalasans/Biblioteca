<?php

//conexão com o banco
require '../conexao_banco.php';

//pagar id
$ConsultaID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//tentar excluir do banco de dados
$sql = "DELETE FROM consulta WHERE ID = $ConsultaID;";
mysqli_query($con, $sql);

//retornar para a página pacientes
header('location: http://localhost/Pokemon_clinical/index.php?pagina=Consulta');