<?php
    include 'util.php';
    $conn = conecta();

    $id = $_GET['id'];
    $sql = "SELECT * FROM alunos WHERE id = :id";
    $select = $conn->prepare($sql);
    $select->bindParam(":id",$id);
    $select->execute();
    $linha = $select->fetch();

    $nome    = $linha['nome'];
    $celular = $linha['celular'];
    $email   = $linha['email'];
    $turma   = $linha['turma'];

    $op1 = ($turma == '2inia' ? 'selected' : '');
    $op2 = ($turma == '2inib' ? 'selected' : '');
    $op3 = ($turma == '2inic' ? 'selected' : '');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Aluno</title>

</head>
<body>
    <h2>Alterar Aluno</h2>
    <form action="updateAlunos.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"><br>

    Nome:<br>

    <input type="text" name="nome" value="<?php echo $nome; ?>"><br>

    Telefone:<br>
    <input type="text" name="celular" value="<?php echo $celular; ?>"><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $email; ?>"><br>

    Engraçado:<br>
    <select name="engracado">
    <option value="1">Sim</option>
    <option value="0">Não</option>
    </select><br>

    Legal:<br>
    <select name="legal">
    <option value="1">Sim</option>
    <option value="0">Não</option>
    </select><br>

    Turma:<br>
    <select name="turma">
  
            <option <?= $op1 ?> value='2inia'>2inia</option>
            <option <?= $op2 ?> value='2inib'>2inib</option>
            <option <?= $op3 ?> value='2inic'>2inic</option>
    </select><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
