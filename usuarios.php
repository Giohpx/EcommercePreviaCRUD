<?php
// conexão simulada
$usuarios = [
    ["id"=>1, "nome"=>"João", "email"=>"joao@email.com"],
    ["id"=>2, "nome"=>"Maria", "email"=>"maria@email.com"]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciar Usuários</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background: #2e7d32;
      color: #fff;
    }
    a.botao {
      display: inline-block;
      padding: 6px 12px;
      margin: 2px;
      background: #2e7d32;
      color: white;
      border-radius: 5px;
      text-decoration: none;
    }
    a.botao:hover {
      background: #1b5e20;
    }
    .add {
      margin-bottom: 10px;
      background: #388e3c;
    }
  </style>
</head>
<body>
  <h2>Usuários Cadastrados</h2>
  
  <a class="botao add" href="adicionarUsuario.php">+ Adicionar Usuário</a>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $u): ?>
    <tr>
      <td><?= $u["id"] ?></td>
      <td><?= $u["nome"] ?></td>
      <td><?= $u["email"] ?></td>
      <td>
        <a class="botao" href="alterarUsuario.php?id=<?= $u['id'] ?>">Alterar</a>
        <a class="botao" style="background:#c62828" href="excluirUsuario.php?id=<?= $u['id'] ?>">Excluir</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>

  <a href="Site.php">Voltar ao Site</a>
</body>
</html>
