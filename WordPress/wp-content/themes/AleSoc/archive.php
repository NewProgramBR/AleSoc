<?php
    require_once('../../../wp-load.php'); //WordPress functions
    if ( have_posts() ) {
        while ( have_posts() ){
            the_post();
            echo the_permalink() . '   |   ';
            echo the_title();
        }
    }
    else{
        echo "NÃO VOLTOU NENHUM POST";
    }

    exit();
?>

<!-- <div class="post new">
            <a href="<?php the_permalink(); ?>">
                <header>
                    <div class="data _center-child">
                        <p class="dia">27</p>
                        <p class="mes">set</p>
                    </div>
                    <h1 class="titulo _center-child"><?php the_title(); ?></h1>
                    <div class="pontos _center-child">10pts</div>
                </header>
                <main class="desc">
                    Possumus illustriora do excepteur. Ad summis vidisse in quamquam te commodo. Duis mentitum tractavissent do ea consequat distinguantur, ea ex coniunctione o ne quid tractavissent est elit officia de voluptate se aute e voluptate, de enim commodo a te tamen mandaremus imitarentur. Dolor deserunt ut incididunt do anim arbitror incurreret ut doctrina qui fore aliquip qui aliqua quibusdam
                </main>
            </a>
</div> -->
