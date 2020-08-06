<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Estados do Brasil - CodeIgniter</title>
</head>
<body>
  <div class="container">
    
    <h1>Estados</h1>

    <table class="table">

      <tr>
        <th>Codigo</th>
        <th>Estado</th>
        <th>UF</th>
      </tr>

      <?php foreach ($estados as $estado) : ?>
      <tr>
        <th><?= $estado['id'] ?></th>
        <th><?= $estado['estado'] ?></th>
        <th><?= $estado['sigla'] ?></th>
      </tr>
      <?php endforeach ?>

    </table>

  </div>
</body>
</html>
