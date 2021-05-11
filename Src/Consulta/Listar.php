<?php

//conexão com o banco
require 'Src/conexao_banco.php';

//pequisar todos os pacientes
$sql = "SELECT consulta.ID AS ID,
               consulta.Data_Agendamento AS Data_Agendamento,
               consulta.Data_Consulta AS Data_Consulta, 
               paciente.NOME AS Nome_Paciente,
               medico.NOME AS Nome_Medico
                FROM consulta
                INNER JOIN paciente on paciente.ID = Consulta.ID_Paciente
                INNER JOIN medico on medico.ID = Consulta.ID_Medico";
$Tabela_Consultas = mysqli_query($con,$sql);

//armazenar em array associativo

