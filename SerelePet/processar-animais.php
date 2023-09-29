<?php
require "conexao.php";
require "Modelo\Animal.php";
require "Repositorio\AnimalRepositorio.php";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   $imagem = 'img/'. $_POST["imagem"];

    $animal = new Animal(null,
        $_POST["tipo"],
        $_POST["nome"],
        $_POST["descricao"],
        $imagem,
        $_POST["idade"],
    );

    $animalRepositorio = new AnimalRepositorio($conn);
    if ($animalRepositorio->cadastrar($animal)){
        header("Location: cadastrar-animais-sucesso.php");
    }else{
        header("Location: index.php");
    }
    
}









?>