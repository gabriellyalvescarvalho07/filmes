<?php
include 'conexao.php'; // Usa seu arquivo original

$sql = "SELECT id, titulo, genero, ano, diretor FROM filmes";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>
                <strong>" . $row["titulo"] . "</strong> 
                (" . $row["ano"] . ")<br>
                Gênero: " . $row["genero"] . "<br>
                Diretor: " . $row["diretor"] . "<br>
                <a href='delete.php?id=" . $row["id"] . "' 
                   onclick='return confirm(\"Tem certeza que deseja excluir este filme?\");'>
                   🗑 Excluir
                </a>
              </li><br>";
    }
    echo "</ul>";
} else {
    echo "<p>Nenhum filme cadastrado.</p>";
}
?>
