<?php
$conn = pg_connect("host=localhost dbname=EcommerceCRUD user=postgres password=postgres");
if (!$conn) {
    die("Erro na conexão com o banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = $_POST['nome'];
    $email = $_POST['descricao'];
    $senha = password_hash($_POST['valor_unitario'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, descricao, valor_unitario,excluido,data_exlusao,qtd_) VALUES id_produto";
    $result = pg_query_params($conn, $sql, [$nome, $email, $senha]);

    if ($result) {
        echo "Usuário adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar usuário.";
    }
}

$query = "SELECT cod_usuario, nome, email, admin FROM usuario ORDER BY cod_usuario";
$result = pg_query($conn, $query);
if (!$result) {
    die("Erro na consulta.");
}
?>
