<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/dark_theme/prism.css">
  <link rel="stylesheet" href="../../src/dark_theme/style.css">
  <link rel="stylesheet" href="../../src/light_theme/basic_theme-1.css">
  <title>Formulários com PHP - 2</title>
</head>
<body>
  <header>
    <h1>Formulários com PHP - Processando e devolvendo</h1>
  </header>

  <main>
    <section>
    <h2>Resultado do processamento</h2>
      <p>Código:</p>
      <pre>
        <code class="language-php">
          $name = $_GET["nome"] ?? "Usuário"; // Operador de coalescência nula
          $sname = $_GET["sobrenome"] ?? "Desconhecido"; // Apenas PHP 7 pra cima
          echo "&lt;p&gt;É um prazer te conhecer, $name $sname! Este é meu site&lt;/p&gt;";
        </code>
      </pre>
    </section>
    <section>
      <p>Resultado:</p>
      <?php
        $name = $_GET["nome"] ?? "Usuário"; // Operador de coalescência nula
        $sname = $_GET["sobrenome"] ?? "Desconhecido"; // Apenas PHP 7 pra cima
        echo "<p>É um prazer te conhecer, $name $sname! Este é meu site</p>";
        ?>
        <!-- Interessante estrutura de controle de histórico -->
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </section>
    <section>
    <?php
        echo '$_GET: ';
        var_dump($_GET);
        echo "<br><br>";
        echo '$_POST: ';
        var_dump($_POST);
        echo "<br><br>";
        echo '$_COOKIE: ';
        var_dump($_COOKIE);
        echo "<br><br>";
        echo '$_REQUEST: ';
        var_dump($_REQUEST);
        echo "<br><br>";
      ?>
      <p>
        Aqui utilizamos o método GET e recebemos apenas na variável de GET,<br>
        Recebeos junto com REQUEST pois essa variável engloba todas as outras juntas. <br>
      </p>
      <pre>
        <code class="language-php">
          var_dump($_GET);
          var_dump($_POST);
          var_dump($_COOKIE);
          var_dump($_REQUEST);
        </code>
      </pre>
    </section>
  </main>
  <script src="../../src/dark_theme/prism.js"></script>
</body>
</html>