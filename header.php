<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>
</head>
<body>

<div class="wrapper">
<header>

<h1>
<a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name');?></a></h1>





<?php

if(function_exists('the_custom_logo')) {
    $custom_logo_id = get_theme_mod('custom-logo');
    $logo = wp_get_attachment_image_src($custom_logo_id);
 

}

?>


<nav>
   
<?php

wp_nav_menu(
    array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="" class="">%3$s</ul>',
    )
);

?>
   
</nav>
<?php get_search_form();?>
<?php /*

dynamic_sidebar('sidebar-1');
*/
?>

</header>

