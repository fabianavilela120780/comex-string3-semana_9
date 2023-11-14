<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form action="salvar_cliente.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular" required>
        <br>

        <label for="endereco">Endereço:</label>
        <textarea name="endereco" id="endereco" required></textarea>
        <br>

        <input type="submit" value="Cadastrar Cliente">
    </form>
</body>
</html>
