<?php get_header();?>

<main>
    <div class="wrapper">

<h1><?php the_title(); ?></h1>
    <article>

    <?php

    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }
    }

?>

    </article>
    </div>
</main>


<?php get_footer();?>
