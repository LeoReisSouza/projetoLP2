<?php
include 'menu.php';
include 'conexao.php';
include 'Modelo\Animal.php';
include 'Repositorio\AnimalRepositorio.php';

$AnimalRepositorio = new AnimalRepositorio($conn);
$cachorros = $AnimalRepositorio->listarCachorros();
$gatos = $AnimalRepositorio->listarGatos();

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serelepet - Menu</title>
</head>

<body>
    <main>

        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo.png" class="logo" alt="logo">
            </div>
        </section>
        <h2>Disponíveis para Adoção</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Cachorros</h3>
                <img class="ornaments" src="img/ornaments.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php


                foreach ($cachorros as $cachorro) : ?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $cachorro->getImagem() ?>">
                        </div>
                        <p><?= $cachorro->getNome() ?></p>
                        <p><?= $cachorro->getDescricao() ?></p>
                        <p><?= "Idade: " . number_format($cachorro->getIdade()) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Gatos</h3>
                <img class="ornaments" src="img/ornaments.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <?php
                foreach ($gatos as $gato) : ?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $gato->getImagem() ?>">
                        </div>
                        <p><?= $gato->getNome() ?></p>
                        <p><?= $gato->getDescricao() ?></p>
                        <p><?= "Idade: " . number_format($gato->getIdade()) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>
    </main>
</body>

</html>