<?php
//conexão com o banco
require 'Src/conexao_banco.php';

//pagar id
$ConsultaID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//pesquisar 
$sql = "SELECT * FROM consulta WHERE ID = $ConsultaID;";

$Consulta = mysqli_query($con,$sql);
$Consulta = mysqli_fetch_assoc($Consulta);

if (!$Consulta){
    $Consulta = array();
    $Consulta ['Data_Consulta'] = "";
}