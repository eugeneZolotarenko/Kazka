<?php
/*
 * Template Name: Новина
 * Template Post Type: post
 */

 get_header();  ?>

<section class="single-post-wave">
</section>
<div class="single-post-centent-wrapper">
<section class="single-post-centent">

    <?php get_header();?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
     <?php the_content(); ?>
     <time class="post-date"><?php the_time('j F Y'); ?></time>

     <?php endwhile; else: ?>

     <p>Не найдено записей по вашему запросу</p>

    <?php endif; ?>
</section>
</div>

<section class="single-post-wave bottom-single-post-wave">
</section>

<?php get_footer(); ?>