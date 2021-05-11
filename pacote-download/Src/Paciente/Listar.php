<?php

//conexão com o banco
require 'Src/conexao_banco.php';

//pequisar todos os pacientes
$sql = "SELECT * FROM paciente;";
$Tabela_Pacientes = mysqli_query($con,$sql);

//armazenar em array associativo

