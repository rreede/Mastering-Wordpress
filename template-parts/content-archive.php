<article class="post-article">

<div class="thumbnail">

<?php 
the_post_thumbnail('thumbnail');
?>

</div>
<div class="content">
  <h1 class="main-title"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h1>
  <span class="date">
<?php
the_date();
?> | <?php
comments_number();
?>
</span>
<div class="excerpt">
<?php
the_excerpt();
?>
</div>
<a class="read-more" href="<?php echo the_permalink(); ?>">Read More</a>
</div>
<br>

</article>