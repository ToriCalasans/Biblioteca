<?php

//conexão com o banco
require 'Src/conexao_banco.php';

//pequisar todos os pacientes
$sql = "SELECT * FROM medico;";
$Tabela_Medicos = mysqli_query($con,$sql);

//armazenar em array associativo

