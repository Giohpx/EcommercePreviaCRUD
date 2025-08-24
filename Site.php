<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Luxo</title>
  <style>

    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background-color: #fdfdfb;
      color: #333;
    }

    nav {
      position: sticky;
      top: 0;
      width: 100%;
      background: #2e7d32; /* Verde */
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      z-index: 1000;
    }

    nav .logo {
      font-size: 1.5em;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #dcedc8;
    }

    main {
      flex: 1;
    }
 
   

    footer {
      background: #2e7d32;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: auto;
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">Eco Luxo</div>
    <ul>
      <li><a href="#">Produtos</a></li>
      <li><a href="Login.html">Login</a></li>
    </ul>
  </nav>

  <main>
    <div class= "Bem-vindo">
        <h1>Bem-vindo a nossa Lojinha Virtual</h1>
        <h3>Conheça nossos produtos!</h3>
    </div>
    <div class= "Produtos">
        <h2>Produtos em Destaque</h2>
        <ul>
            <li>Produto 1 - Descrição breve</li>
            <li>Produto 2 - Descrição breve</li>
            <li>Produto 3 - Descrição breve</li>
        </ul>
    </div>
    <div>
        <h3> Faça seu cadastro AQUI</h3>
        
    </div>
    
    
  </main>

  <footer>
    <p>&copy; 2025 Eco Luxo - Todos os direitos reservados.</p>
  </footer>

</body>
</html>
