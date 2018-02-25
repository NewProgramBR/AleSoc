<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>

    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- JQuery -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>

    <!-- Main Script -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script>
        var $templateDir = "<?php bloginfo('template_url'); ?>";
    </script>
</head>

<body>
    <nav class="_center-child">
        <h1 class="_wrapper">Alexandre Sociologia</h1>
        <ul>
            <a href="<?php echo home_url()?>">
                <li class="_center-child">Início</li>
            </a>
            <a href="avaliacoes">
                <li class="_center-child">Avaliações</li>
            </a>
            <a href="sobre">
                <li class="_center-child">Sobre</li>
            </a>
        </ul>
    </nav>

    <main>
