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
    font-family: 'Arial', sans-serif;
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #f4f4f0;
    color: #333;
  }

  /* Navbar */
  nav {
    position: sticky;
    top: 0;
    width: 100%;
    background-color: #2e7d32;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    z-index: 1000;
  }

  nav .logo {
    font-size: 1.8em;
    font-weight: bold;
    letter-spacing: 1px;
  }

  nav ul {
    display: flex;
    list-style: none;
    gap: 20px;
  }

  nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    transition: 0.3s;
  }

  nav ul li a:hover {
    color: #c8e6c9;
  }

  /* Main content */
  main {
    flex: 1;
    padding: 50px 40px;
  }

  .bem-vindo {
    text-align: center;
    margin-bottom: 50px;
  }

  .bem-vindo h1 {
    font-size: 2.8em;
    color: #2e7d32;
    margin-bottom: 15px;
  }

  .bem-vindo p {
    font-size: 1.2em;
    color: #555;
  }

  /* Produtos em grid */
  .produtos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
  }

  .produto-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    padding: 25px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .produto-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
  }

  .produto-card h3 {
    color: #2e7d32;
    margin-bottom: 10px;
  }

  .produto-card p {
    color: #555;
    margin-bottom: 15px;
    line-height: 1.4;
  }

  .produto-card a {
    text-decoration: none;
    display: inline-block;
    background-color: #388e3c;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
    transition: 0.3s;
  }

  .produto-card a:hover {
    background-color: #2e7d32;
    transform: scale(1.05);
  }

  /* Cadastro */
  .cadastro {
    text-align: center;
    margin-bottom: 50px;
  }

  .cadastro a {
    text-decoration: none;
    background-color: #ff9800;
    color: #fff;
    padding: 12px 25px;
    border-radius: 10px;
    font-weight: bold;
    font-size: 1em;
    transition: 0.3s;
  }

  .cadastro a:hover {
    background-color: #f57c00;
    transform: scale(1.05);
  }

  /* Footer */
  footer {
    background-color: #2e7d32;
    color: #fff;
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
      <li><a href="Produtos.php">Produtos</a></li>
      <li><a href="Login.html">Login</a></li>
    </ul>
  </nav>

  <main>
    <section class="bem-vindo">
      <h1>Bem-vindo à Eco Luxo</h1>
      <p>Descubra nossos produtos sustentáveis e de qualidade para o seu dia a dia!</p>
    </section>

    <section class="produtos">
      <div class="produto-card">
        <h3>Produto 1</h3>
        <p>Descrição do produto 1. Sustentável, prático e elegante para o seu uso diário.</p>
        <a href="#">Saiba mais</a>
      </div>
      <div class="produto-card">
        <h3>Produto 2</h3>
        <p>Descrição do produto 2. Feito com materiais reciclados de alta qualidade.</p>
        <a href="#">Saiba mais</a>
      </div>
      <div class="produto-card">
        <h3>Produto 3</h3>
        <p>Descrição do produto 3. Ideal para presentear amigos e familiares.</p>
        <a href="#">Saiba mais</a>
      </div>
    </section>
    <br> <br>
    <section class="cadastro">
      <h2>Faça seu cadastro e aproveite nossos produtos!</h2>
      <br> <br>
      <a href="adicionarUsuario.php">Cadastrar</a>
    </section>
    <br>
   
  </main>

  <footer>
    <p>&copy; 2025 Eco Luxo - Todos os direitos reservados.</p>
  </footer>

</body>
</html>
