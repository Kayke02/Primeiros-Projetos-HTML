<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Dados Recebidos</title></head>
<body>
    <h1>Cadastro Recebido</h1>
    <p>Nome: <?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Idade: <?php echo htmlspecialchars($idade, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Produto: <?php echo htmlspecialchars($produto, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Quantidade: <?php echo htmlspecialchars($quantidade, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>