<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM filmes"; // Consulta todos os filmes
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1' cellpadding='5' cellspacing='0'>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Gênero</th>
                <th>Ano</th>
                <th>Diretor</th>
                <th>Ações</th>
            </tr>";

    while ($row = $result->fetch_assoc()) { // Para cada filme
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["titulo"] . "</td>
                <td>" . $row["genero"] . "</td>
                <td>" . $row["ano"] . "</td>
                <td>" . $row["diretor"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>✏️ Editar</a> | 
                    <a href='delete.php?id=" . $row["id"] . "' 
                       onclick='return confirm(\"Tem certeza que deseja excluir este filme?\");'>
                       🗑 Excluir
                    </a>
                </td>
              </tr>";
    }

    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum filme encontrado."; // Mensagem se não houver filmes
}
?>
