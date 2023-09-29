<?php

require "conexao.php";
require "Modelo/Animal.php";
require "Repositorio/AnimalRepositorio.php";

$animalRepositorio = new AnimalRepositorio($conn);

$animalRepositorio->deletar($_GET['id']);
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serelepet - Deletar Animal</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="img/logo-horizontal.png" class="logo-admin" alt="logo">
        <h1>Animal deletado com sucesso</h1>
        <img class= "ornaments" src="img/ornaments.png" alt="ornaments">
    </section>
    <section class="container-form">
        <form action="admin.php" method="post">                      
            <input type="submit" name="voltar" 
            class="botao-cadastrar" value="voltar"/>
        </form>

    </section>
</main>
</body>
</html>