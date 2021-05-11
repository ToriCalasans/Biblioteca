<?php
//conexão com o banco
require 'Src/conexao_banco.php';

//pagar id
$MedicoID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//pesquisar 
$sql = "SELECT * FROM medico WHERE ID = $MedicoID;";

$Medico = mysqli_query($con,$sql);
$Medico = mysqli_fetch_assoc($Medico);

if (!$Medico){
    $Medico = array();
    $Medico ['Nome'] = "";
    $Medico ['Area'] = "";
    $Medico ['Email'] = "";

}