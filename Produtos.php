<?php
$conn = pg_connect("host=localhost dbname=EcommerceCRUD user=postgres password=postgres");
if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor_unitario = $_POST['valor_unitario'];
    $excluido = $_POST['excluido'];
    $data_exclusao = null;
    $qtd = $_POST['qtd'];

    $sql = "INSERT INTO produto (nome, descricao, valor_unitario, excluido, data_exclusao, qtd_) 
            VALUES ($1, $2, $3, $4, $5, $6)";
    $result = pg_query_params($conn, $sql, [$nome, $descricao, $valor_unitario, $excluido, $data_exclusao, $qtd]);

    if ($result) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar produto.";
    }
}

$query = "SELECT id_produto, nome, descricao, valor_unitario, excluido, data_exclusao, qtd_ FROM produto ORDER BY id_produto";
$result = pg_query($conn, $query);
if (!$result) {
    die("Erro na consulta.");
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor Unitário</th>
            <th>Quantidade</th>
            <th>Excluído</th>
            <th>Data Exclusão</th>
        </tr>
        <?php while ($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['descricao']) ?></td>
                <td><?= htmlspecialchars($row['valor_unitario']) ?></td>
                <td><?= htmlspecialchars($row['qtd_']) ?></td>
                <td><?= htmlspecialchars($row['excluido']) ?></td>
                <td><?= htmlspecialchars($row['data_exclusao']) ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
