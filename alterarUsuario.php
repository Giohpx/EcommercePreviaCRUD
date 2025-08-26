<?php
    include 'util.php';
    $conn = conecta();

    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $select = $conn->prepare($sql);
    $select->bindParam(":id",$id);
    $select->execute();
    $linha = $select->fetch();

    $cod_usuario    = $linha['cod_usuario'];
    $nome = $linha['nome'];
    $email   = $linha['email'];
    $senha   = $linha['senha'];
    $admin   = $linha['admin'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Aluno</title>

</head>
<body>
    <h2>Alterar Usuario</h2>
    <form action="alterarUsuario.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"><br>

    Nome:<br>
    
    <input type="text" name="nome" value="<?php echo $nome; ?>"><br>

    Telefone:<br>
    <input type="text" name="email" value="<?php echo $email; ?>"><br>

    Email:<br>
    <input type="email" name="senha" value="<?php echo $senha; ?>"><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
