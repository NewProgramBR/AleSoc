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
        <div class="post new hot">
            <a href="post"></a>
            <header>
                <div class="data _center-child">
                    <p class="dia">27</p>
                    <p class="mes">set</p>
                </div>
                <h1 class="titulo _center-child">Contruções políticas</h1>
                <div class="pontos _center-child">10pts</div>
            </header>
            <main class="desc">
                Possumus illustriora do excepteur. Ad summis vidisse in quamquam te commodo. Duis mentitum tractavissent do ea consequat distinguantur, ea ex coniunctione o ne quid tractavissent est elit officia de voluptate se aute e voluptate, de enim commodo a te tamen mandaremus imitarentur. Dolor deserunt ut incididunt do anim arbitror incurreret ut doctrina qui fore aliquip qui aliqua quibusdam
            </main>
        </div>
    </div>

    <?php get_footer(); ?>
