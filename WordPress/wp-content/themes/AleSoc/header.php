<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>

    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/avaliacoes.css'; ?>">

    <!-- JQuery -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>

    <!-- Main Script -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script>
        var $templateDir = "<?php bloginfo('template_url'); ?>";

    </script>

    <!--  <?php wp_head(); ?> -->
</head>

<body>
    <nav class="_center-child">
        <h1 class="_wrapper">Alexandre Sociologia</h1>
        <ul>
            <li class="_center-child">
                <a href="<?php echo home_url()?>" class="_center-child">Início</a>
            </li>
            <li class="_center-child">
                <a href="avaliacoes" class="_center-child">Avaliações</a>
            </li>
            <li class="_center-child">
                <a href="sobre" class="_center-child">Sobre</a>
            </li>
        </ul>
    </nav>

    <main>
