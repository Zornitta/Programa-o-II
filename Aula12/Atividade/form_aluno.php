<?php

require_once 'PDO.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form method="POST" action="">
        <?php if ($id): ?>
            <input type="hidden" name="id" value="<?php echo intval($id); ?>">
        <?php endif; ?>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>