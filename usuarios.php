<?php

$conn = pg_connect("host=localhost dbname=EcommerceCRUD user=postgres password=postgres");
if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

$query = "SELECT cod_usuario, nome, email, admin FROM usuario ORDER BY cod_usuario";
$result = pg_query($conn, $query);
if (!$result) {
    die("Erro na consulta.");
}

$usuarios = pg_fetch_all($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerenciar Usuários</title>
<style>
body { font-family: Arial; background: #f9f9f9; padding: 20px; }
table { width: 100%; border-collapse: collapse; margin-top: 20px; }
th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
th { background: #2e7d32; color: #fff; }
a.botao { display: inline-block; padding: 6px 12px; margin: 2px; background: #2e7d32; color: white; border-radius: 5px; text-decoration: none; }
a.botao:hover { background: #1b5e20; }
a.botao.excluir { background: #c62828; }
a.botao.add { margin-bottom: 10px; background: #388e3c; }
</style>
</head>
<body>
<h2>Usuários Cadastrados</h2>

<a class="botao add" href="adicionarUsuario.php">+ Adicionar Usuário</a>

<table>
<tr>
    <th>Cod Usuario</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Admin</th>
    <th>Ações</th>
</tr>

<?php if ($usuarios): ?>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?= $usuario['cod_usuario'] ?></td>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $usuario['email'] ?></td>
        <td><?= $usuario['admin'] ?></td>
        <td>
            <a class="botao" href="alterarUsuario.php?id=<?= $usuario['cod_usuario'] ?>">Alterar</a>
            <a class="botao excluir" href="excluirUsuario.php?id=<?= $usuario['cod_usuario'] ?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
<tr><td colspan="5">Nenhum usuário cadastrado.</td></tr>
<?php endif; ?>

</table>

<a href="Site.php">Voltar ao Site</a>

</body>
</html>

