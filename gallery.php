<?php
/**
 * Template Name: Template Gallery
 */
get_header(); 
?>

<div class="header-photo-gallery">
        <div class="container-semicircles">
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
<main class="gallery-wrapper">
    <div class="cloud-wrapper"><div class="clouds"></div></div>
    <div class="gallery-wrapper-content">
        <div class="gallery-content">
            <h3 class="title"><?php the_title(); ?></h3>
            <!-- Main Page Gallery -->
            <!-- <?php if (is_page('gallery')) { ?>
                <?php the_field('gallery') ?>
            <?php } ?> -->
            <!-- End Main Page Gallery -->
        </div>
    </div>
    
</main>



<div class="footer-photo-gallery">
<span class="yellow-wave"></span>
</div>

<?php get_footer(); ?>