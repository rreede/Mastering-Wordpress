<?php get_header();?>

<div class="wrapper">

<main>
  
    <article>

    <?php

    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }

?>

</article>

<div class="pagination">
<?php

    the_posts_pagination();

?>
</div>   
</main>




<?php get_footer();?>
</div>