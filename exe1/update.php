<?php
include 'conexao.php'; // Inclui o arquivo de conexão

// Verifica se o ID foi passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM filmes WHERE id=$id";
    $result = $conn->query($sql);
    $filme = $result->fetch_assoc();
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $diretor = $_POST['diretor'];

    $sql = "UPDATE filmes 
            SET titulo='$titulo', genero='$genero', ano='$ano', diretor='$diretor' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se der certo
        exit;
    } else {
        echo "Erro: " . $conn->error; // Mostra o erro
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atualizar Filme</title>
</head>
<body>
<h1>Atualizar Filme</h1>

<form method="POST" action="">
    <label>Título:</label>
    <input type="text" name="titulo" value="<?php echo $filme['titulo']; ?>" required><br>

    <label>Gênero:</label>
    <input type="text" name="genero" value="<?php echo $filme['genero']; ?>" required><br>

    <label>Ano:</label>
    <input type="number" name="ano" value="<?php echo $filme['ano']; ?>" required><br>

    <label>Diretor:</label>
    <input type="text" name="diretor" value="<?php echo $filme['diretor']; ?>" required><br>

    <input type="submit" value="Atualizar">
</form>

<a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>