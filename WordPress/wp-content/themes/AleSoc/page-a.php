<?php
/*
    Template Name: Avaliações
*/

    get_header();
    //echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/avaliacoes.css">';
    //wp_enqueue_style( 'avaliacoes', get_template_directory_uri() . '/assets/css/avaliacoes.css');

    include('avaliacoes.php');
    $Avaliacoes = new Avaliacoes();
?>

    <!-- <p id="pergunta"> <?php echo $Avaliacoes->pergunta; ?></p> -->

    <div class="container posts">
        <!-- opts -->
        <?php //echo $Avaliacoes->htmlThis(); ?>
    </div>

    <?php get_footer(); ?>
