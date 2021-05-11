<?php
//conexão com o banco
require 'Src/conexao_banco.php';

//pagar id
$PacienteID = isset($_GET['ID']) ? $_GET['ID'] : 0;


//pesquisar 
$sql = "SELECT * FROM paciente WHERE ID = $PacienteID;";

$Paciente = mysqli_query($con,$sql);
$Paciente = mysqli_fetch_assoc($Paciente);

if (!$Paciente){
    $Paciente = array();
    $Paciente ['Nome'] = "";
    $Paciente ['Nascimento'] = "";
    $Paciente ['CPF'] = "";

}