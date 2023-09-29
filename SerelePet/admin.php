<?php
require "conexao.php";
require "Modelo/Animal.php";
require "Repositorio/AnimalRepositorio.php";
$animalRepositorio = new AnimalRepositorio($conn);
$animais = $animalRepositorio->buscarTodos();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/icone.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Serelepet - Admin</title>
</head>

<body>
  <main>
    <section class="container-admin-banner">
      <img src="img/logo-horizontal.png" class="logo-admin" alt="logo">
      <h1>Admistração Serelept</h1>
      <img class="ornaments" src="img/ornaments.png" alt="ornaments">
    </section>
    <h2>Lista de Animais</h2>

    <section class="container-table">
      <table>
        <thead>


          <tr>
            <th>Animal</th>
            <th>Tipo</th>
            <th>Descricão</th>
            <th>Idade</th>
            <th colspan="2">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($animais as $animal) : ?>
            <tr>
              <td><?= $animal->getNome() ?></td>
              <td><?= $animal->getTipo() ?></td>
              <td><?= $animal->getDescricao() ?></td>
              <td><?= $animal->getIdade() ?></td>
              <td>
                <form action="excluir-animal.php" method=GET>
                  <input type="hidden" name="id" value="<?= $animal->getId() ?>">                  
                  <input type="submit" class="botao-excluir" value="Excluir">
                </form>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
      <a class="botao-cadastrar" href="cadastrar-animal.php">Cadastrar Animal</a>
      <form action="index.php" method="post">                      
            <input type="submit" name="voltar" 
            class="botao-cadastrar" value="voltar"/>
      </form>
    </section>
  </main>
</body>

</html>