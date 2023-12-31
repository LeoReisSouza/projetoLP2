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
    <title>Serelepet - Cadastrar Animal</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="img/logo-horizontal.png" class="logo-admin" alt="logo">
        <h1>Cadastro de Animais</h1>
        <img class= "ornaments" src="img/ornaments.png" alt="ornaments">
    </section>
    <section class="container-form">
        <form action="processar-animais.php" method="POST">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do animal" required>
            <div class="container-radio">
                <div>
                    <label for="Cachorro">Cachorro</label>
                    <input type="radio" id="Cachorro" name="tipo" value="Cachorro" checked>
                </div>
                <div>
                    <label for="Gato">Gato</label>
                    <input type="radio" id="Gato" name="tipo" value="Gato">
                </div>
            </div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" required>

            <label for="preco">Idade</label>
            <input type="text" id="idade" name="idade" placeholder="Digite uma descrição" required>

            <label for="imagem">Envie uma imagem do Animal</label>
            <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar Animal"/>
        </form>
    
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>
</body>
</html>