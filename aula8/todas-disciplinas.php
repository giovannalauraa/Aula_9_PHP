<!DOCTYPE html>
    <html>
        <head>
            <title>Todas disciplinas</title>
        </head>
        <body>
            <h2>Todas as Disciplinas</h2>
            <table>
                <tr>
                    <td><b> Nome: </b></td>
                    <td><b>Carga Horária: </b></td>
                    <td><b>Ementa: </b></td>
                </tr>
        <?php
            require_once "Disciplina.class.php";
            $objDisciplina = new Disciplina();
            $disciplinas = $objDisciplina->buscarTodasDisciplinas();
            
            foreach($disciplinas AS $dc){
                echo "<tr>";
                echo"<td>".$dc["nome"]."</td>";
                echo "<td>".$dc["cargaHoraria"]."</td>";
                echo "<td>".$dc["ementa"]."</td>";
                echo "<td><a href='atualizar-disciplina.php?nome={$dc["nome"]}'> Editar </a>| Excluir </td>";
                echo "</tr>";
            }
        ?>
            </table>
        </body>
</html>