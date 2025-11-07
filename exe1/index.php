<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Simples - Filmes</title>
</head>
<body>
    <h1>Gerenciamento de Filmes 🎬</h1>

    <!-- Formulário para adicionar novo filme -->
    <form action="index.php" method="POST">
        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Gênero:</label>
        <input type="text" name="genero" required>

        <label>Ano:</label>
        <input type="number" name="ano" required>

        <label>Diretor:</label>
        <input type="text" name="diretor" required>

        <input type="submit" value="Adicionar Filme">
    </form>

    <hr>

    <h2>Lista de Filmes</h2>
    <div id="filmes">
        <?php include 'read.php'; ?>
    </div>
</body>
</html>

