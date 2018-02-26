<?php
/*
    Template Name: Avaliações
*/

?>
<?php get_header(); ?>
<?php

    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/avaliacoes.css">'
//    wp_enqueue_style( 'avaliacoes', get_template_directory_uri() . '/assets/css/avaliacoes.css');
?>
    <p id="pergunta">Qual é o seu ano?</p>
    <div class="container">
        <div class="ano">
            <a href="1" class="_center-child">1º</a>
        </div>
        <div class="ano">
            <a href="2" class="_center-child">2º</a>

        </div>
        <div class="ano">
            <a href="3" class="_center-child">3º</a>
        </div>
    </div>
<?php get_footer(); ?>
