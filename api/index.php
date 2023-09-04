<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculador IMC</title>
  <link href="../index.css" rel="stylesheet">
  </link>
</head>

<body>
  <header>
    <h1>Consulta valor IMC</h1>
  </header>
  <main>
    <section class="form">
      <form method="post">
        <div class="input-wrapper">
          <label for="height">Insira a sua altura:</label>
          <input name="height" id="height" />
        </div>
        <div class="input-wrapper">
          <label for="weight">Insira o seu peso:</label>
          <input name="weight" id="weight" />
        </div>


        <button type="submit">Calcular</button>
      </form>

      <?php
      require 'calculoimc.php';
      ?>
    </section>
  </main>
</body>

</html>