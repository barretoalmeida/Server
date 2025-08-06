<?php
// Página padrão
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Caminho do conteúdo
$file = "pages/{$page}.php";

// Verifica se a página existe
if (!file_exists($file)) {
    $file = "pages/home.php";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>kuromi 💖</title>
  <p>Hoje é 
  <strong>
    <?php
      date_default_timezone_set("America/Sao_Paulo");
      echo date("d/m/Y H:i:s");
    ?>
  </strong>
</p>
  <style>
    body {
      background: linear-gradient(to bottom right, rgb(154, 109, 240), rgb(96, 19, 238));
      font-family: 'Comic Sans MS', cursive;
      margin: 0;
      padding: 0;
      color: #db6a6a;
      text-align: center;
    }

    .container {
      padding: 30px;
    }

    .imagem-fofa {
      width: 200px;
      margin: 20px auto;
      display: block;
      border-radius: 15px;
      box-shadow: 0 0 10px #fff;
    }

    nav a {
      color: rgb(255, 255, 255);
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
      font-size: 18px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      background-color: #ff99cc;
      color: white;
      padding: 15px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bem-vindo ao meu site! 🐰✨</h1>

    <img src="https://i.pinimg.com/1200x/c8/69/83/c86983be3f976cc7d0c9265d6351687b.jpg" alt="gatinho" class="imagem-fofa">

    <?php
      $frases = [
        "Você é incrível do jeitinho que é! 💕",
        "Nunca esqueça do seu brilho! ✨",
        "Sorria! Hoje é um ótimo dia! 🌈",
        "Toma cherosa 💐"
      ];

      // Exibe uma frase aleatória:
      echo "<p><strong>" . $frases[array_rand($frases)] . "</strong></p>";
    ?>

    <nav>
      <a href="https://github.com/barretoalmeida" target="_blank">🌸 Meu GitHub</a>
    </nav>
  </div>

  <footer>
    Feito com carinho 💖!
  </footer>
</body>
</html>
