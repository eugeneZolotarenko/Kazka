<?php
/**
 * Template Name: Template Kindergarten
 */
get_header(); 
?>

<div class="header-photo-kinder">
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


<header class="kinder-header">
    <div class="cloud-part-kinder"><div class="clouds"></div></div>
    <h3 class="title"><?php the_title(); ?></h3>
</header>

<main>
    <div class="kinder-content">
<!-- Main block Kinder -->

<?php if (is_page('reyestraciya-ditey')) { ?>
<iframe class="reg-isuo" src="https://reg.isuo.org/about"></iframe>
<?php } ?>

<?php
   while ( have_posts() ) : the_post();
 
   the_content();
 
   endwhile;
?>

    </div>

</main>

<div class="footer-photo-kinder"></div>

<?php get_footer(); ?>