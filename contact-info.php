<?php
/**
 * Template Name: Template Contact Info
 */
get_header(); 
?>

<div class="header-photo-contact-info">
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
<section class="contact-info-wrapper">
    <div class="cloud-wrapper"><div class="clouds"></div></div>
    <div class="contact-info-title">
        <svg width="1374" height="50" viewBox="0 0 1374 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M403.15 18.592C234.211 -3.42091 63.992 13.3863 0 24.5415V0H1374C1328.29 28.7557 1209.45 75.558 1099.75 32.722C990.048 -10.114 812.699 5.45368 737.737 18.592C696.599 27.7641 572.089 40.605 403.15 18.592Z" fill="#EDC607"/>
        </svg>
        <h3 class="title"><?php the_title(); ?></h3>
    </div>
    <section class="contact-info-content">

    <?php if( is_page( array( 'information', 'istoriia', 'struktura-zakladu', 'dostup-do-publichnoi-informatsii', 'zvernennia-hromadian', 'normatyvno-pravove-zabezpechennia', 'korysni-posylannia') ) ) { ?>
        

    <div class="info-content">

    <?php if (is_page('korysni-posylannia')) { ?>
    <a target="_blank" class="korysni-links" href="https://www.kmu.gov.ua/ua"></a>
    <a target="_blank" class="korysni-links" href="https://mon.gov.ua/ua"></a>
    <a target="_blank" class="korysni-links" href="https://bc-rada.gov.ua/"></a>
    <a target="_blank" class="korysni-links" href="http://osvita-bmr.ucoz.org/"></a>
    <a target="_blank" class="korysni-links" href="http://koda.gov.ua/"></a>
    <a target="_blank" class="korysni-links" href="http://www.kyiv-oblosvita.gov.ua/"></a>
    <a target="_blank" class="korysni-links" href="https://pedpresa.ua/"></a>
    <?php } ?>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>

    <?php } ?>

     <!-- Contact Page -->
    <?php if (is_page('contacts')) { ?>
        <div class="contact-content">
            <div class="kazka-phone">
                <h4>БНВК "Казка"</h4>
                <p>Email: bnvk_kazka@ukr.net, <br> <br> <strong>або надішліть ваше повідомлення нижче</strong></p>
                <span>096-233-266-9</span>
            </div>
            <div class="time-work-address">
                <div class="time-work">
                    <span>Режим Роботи:</span>
                    <p>Початкова Школа:  09:00 - 18:00</p>
                    <p>Дитячий Садочок:  07:30 - 18:00</p>
                    
                </div>
                <div class="address">
                    <span>Адреса:</span>
                    <p>м. Біла Церква, вул. Таращанська 167а</p>
                </div>
                <!-- <div id="map">

                </div> -->
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%91%D1%96%D0%BB%D0%B0%20%D0%A6%D0%B5%D1%80%D0%BA%D0%B2%D0%B0%20%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F%20%D0%A2%D0%B0%D1%80%D0%B0%D1%86%D0%B0%D0%BD%D1%81%D1%8C%D0%BA%D0%B0%20167%D0%B0&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style> 
                </div>

        </div>


        <?php } ?>
    </section>
    <?php if (is_page('contacts')) { ?>
    <?php echo do_shortcode('[ninja_form id=1]') ?>
    <?php } ?>
     <!-- End Contact Page -->



</section>

<div class="footer-photo-contact-info">
</div>

<?php get_footer(); ?>