<?php require 'Src/Paciente/Listar.php'; ?>

</br>
</br>
</br>
<table class="table table-bordered table-hover table-striped " style="width : 100%; " id="Tabela_Pacientes">
    <caption>
    <a class="btn btn-success" href="?pagina=SalvarPaciente">Cadastrar</a>


   </caption>
    <!-- 
    linha  = table roll = tr
    titulo = table head = th
    coluna = Table data = td 
-->
    <thead class="bg-info">
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>


        <?php while ($Linha = mysqli_fetch_assoc($Tabela_Pacientes)) { ?>

            <!-- -->
            <tr>
                <th><?= $Linha['Nome']   ?></th>
                <th><?= $Linha['Nascimento'] ?></th>
                <th><?= $Linha['CPF']  ?></th>
                <td>
                    <a href="?pagina=SalvarPaciente&ID=<?= $Linha['ID'] ?>">Editar</a>
                    |
                    <a href="Src/Paciente/Excluir.php?ID=<?= $Linha['ID'] ?>">Excluir</a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>