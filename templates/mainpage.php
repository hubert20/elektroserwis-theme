<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- Main about -->
<?php get_template_part('template-parts/main-about'); ?>

<!-- Main jobs -->
<?php get_template_part('template-parts/main-jobs'); ?>

<!-- Main Form -->
<?php get_template_part('template-parts/main-form'); ?>

<!-- Main realizations -->
<?php get_template_part('template-parts/main-realizations'); ?>

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'elektroserwis-wp-theme'));
endwhile;
?>

<?php get_footer(); ?>