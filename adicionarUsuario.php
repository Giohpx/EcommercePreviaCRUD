<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Usuário - Eco Luxo</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background: linear-gradient(to right, #fdfcfb, #e0e0d1);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
      transition: transform 0.3s;
    }

    .container:hover {
      transform: translateY(-5px);
    }

    h2 {
      color: #2e7d32;
      margin-bottom: 25px;
      font-size: 1.8em;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #555;
      text-align: left;
    }

    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #2e7d32;
      box-shadow: 0 0 5px rgba(46,125,50,0.5);
    }

    input[type="submit"] {
      margin-top: 25px;
      padding: 12px 25px;
      background: #2e7d32;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
    }

    input[type="submit"]:hover {
      background: #1b5e20;
      transform: scale(1.05);
    }

    a.back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #c5a880;
      font-weight: bold;
      transition: color 0.3s;
    }

    a.back-link:hover {
      color: #a1887f;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Cadastro de usuário</h2>

    <form action="salvarUsuario.php" method="POST">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" placeholder="Digite o nome completo" required>

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Digite o e-mail" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>

      <input type="submit" value="Salvar Usuário">
    </form>

    <a href="usuarios.php" class="back-link">←Usuários</a>
    <a href="Site.php" class="back-link">← Página inicial</a>
    <a href="Login.html" class="back-link">← Login</a>


  </div>

</body>
</html>
