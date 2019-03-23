<?php
/**
 * Template Name: Template Prozorist
 */
get_header(); 
?>

<div class="header-photo-transparency">
        <div class="container-semicircles pages-semicircles">
                    <div class="semicircle semicircle-1">
                        <a target="_blank" href="/prozorist/blagodiinyi-fond-kazkovyi-svit"><i class="fas fa-hand-holding-usd"></i></a>
                    </div>
                    <div class="semicircle semicircle-2">
                        <a target="_blank" href="https://www.youtube.com/channel/UChIEJegMQrSXvxv4ahF_CBA"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="semicircle semicircle-3">
                        <div class="sun">
                             <button href="#" class="scroll_down" id="scroll_down"></button>
                        </div>
                    </div>
                    <div class="semicircle semicircle-4">
                        <a target="_blank" href="https://www.facebook.com/groups/1284390685011463/about/"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="semicircle semicircle-5">
                        <a target="_blank" href="https://www.instagram.com/bnvkkazka/"><i class="fab fa-instagram"></i></a>
                    </div>
       </div>
</div>
<section class="transparency-wrapper">
    <div class="bg-transparency">
    <div class="cloud-wrapper"><div class="clouds"></div></div>
    <div class="transparency-title">
    <svg width="1374" height="50" viewBox="0 0 1374 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M403.15 18.592C234.211 -3.42091 63.992 13.3863 0 24.5415V0H1374C1328.29 28.7557 1209.45 75.558 1099.75 32.722C990.048 -10.114 812.699 5.45368 737.737 18.592C696.599 27.7641 572.089 40.605 403.15 18.592Z" fill="#CDE600"/>
    </svg>

        <h3 class="title"><?php the_title(); ?></h3>
    </div>
    <section class="transparency-content">

     <!-- Vakansii -->
    <?php if (is_page('vakansii')) { ?>

    <ul class="vakansii-block">
        <li>Підрозділ</li>
        <li>Посада</li>
        <li>Ставка</li>
        <!-- 1 Posada -->
        <li><?php the_field('1_pidrozdil'); ?></li>
        <li><?php the_field('1_posada'); ?></li>
        <li><?php the_field('1_stavka'); ?></li>
        <!-- 2 Posada -->
        <li><?php the_field('2_pidrozdil'); ?></li>
        <li><?php the_field('2_posada'); ?></li>
        <li><?php the_field('2_stavka'); ?></li>
        <!-- 3 Posada -->
        <li><?php the_field('3_pidrozdil'); ?></li>
        <li><?php the_field('3_posada'); ?></li>
        <li><?php the_field('3_stavka'); ?></li>
        <!-- 4 Posada -->
        <li><?php the_field('4_pidrozdil'); ?></li>
        <li><?php the_field('4_posada'); ?></li>
        <li><?php the_field('4_stavka'); ?></li>
    </ul>

    <?php } ?>
    <!-- End Vakansii -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile; endif; ?>

    </section>
    </div>
</section>

<div class="footer-photo-transparency">
</div>

<?php get_footer(); ?>
