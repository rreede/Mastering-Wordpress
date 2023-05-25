<?php get_header();?>

<div class="wrapper">
<main>
<h1><?php the_title(); ?></h1>
    <div class="wrapper">
    <article>

    <?php

    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }

?>

    </article>
    </div>
</main>
</div>


<?php get_footer();?>
