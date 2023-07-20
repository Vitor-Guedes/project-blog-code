<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Codar</title>
    <link rel="stylesheet" href="<?= $app->getRoutePathByName('home') ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= router('home') ?>" id="logo">
            <img src="<?= router('home') ?>imgs/logo.svg" alt="Blog-Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= router('home') ?>">Home</a></li>
                <li><a href="<?= router('categories') ?>">Categorias</a></li>
                <li><a href="<?= router('about') ?>">Sobre</a></li>
                <li><a href="<?= router('contact') ?>">Contato</a></li>
            </ul>
        </nav>
    </header>