<?php
/**
 * Template Name: Template School
 */
get_header(); 
?>
<div class="header-photo-school">
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

<header>
    <div class="cloud-part"><div class="clouds"></div>
    </div>
        <h3 class="title"><?php the_title(); ?></h3>
</header>

<main>

<div class="school-content">
<!--Main block School -->



<?php
   while ( have_posts() ) : the_post();
 
   the_content();
 
   endwhile;
?>

<!--End main block School -->



<!-- Schedule Block -->
<?php if (is_page('rozklad-urokiv')) { ?>
<div class="schedule-nav-line">
    <span>Швидкий Перехід:</span>  
    <a class="schedule-nav schedule-nav-calls" href="#">Дзвінки</a>
    <a class="schedule-nav schedule-nav-1" href="#">1 клас</a>
    <a class="schedule-nav schedule-nav-2" href="">2 клас</a>
    <a class="schedule-nav schedule-nav-3" href="">3 клас</a>
    <a class="schedule-nav schedule-nav-4" href="">4 клас</a>
</div>
<section class="calls-block">
        <div class="block-schedule-title">
            <h3>Дзвінки</h3>
        </div>
        <div class="schedule-card">
                <ol>
                        <li>09:00-09:40 (09:35)</li>
                        <li>09:50-10:30 (10:25)</li>
                        <!--<span> <strong>Обід 10:20-10:55</strong></span>-->
                        <li>10:40-11:20 (11:15)</li>
                        <li>11:30-12:10 (12:05)</li>
                        <li>12:25-13:05 (13:00)</li>
                </ol>
        </div>
</section>
        <!-- 1 class -->
<section class="schedule-1-class">
       <div class="block-schedule-title">
                <h3>1 Клас</h3>
        </div>
        <?php 
        $monday_1 = get_field('monday_1');
        if( $monday_1 ): ?>
        <div class="schedule-card"><strong>Понеділок</strong>
                <ol>
                        <li id="first-subject-1"><?php echo $monday_1 ['subject_1_1_1'] ?></li>
                        <li><?php echo $monday_1 ['subject_2_1_1'] ?></li>
                        <li><?php echo $monday_1 ['subject_3_1_1'] ?></li>
                        <li><?php echo $monday_1 ['subject_4_1_1'] ?></li>
                        <li><?php echo $monday_1 ['subject_5_1_1'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $tuesday_1  = get_field('tuesday_1');
        if( $tuesday_1 ): ?>
        <div class="schedule-card"><strong>Вівторок</strong>
                <ol> 
                        <li><?php echo $tuesday_1 ['subject_1_2_1'] ?></li>
                        <li><?php echo $tuesday_1 ['subject_2_2_1'] ?></li>
                        <li><?php echo $tuesday_1 ['subject_3_2_1'] ?></li>
                        <li><?php echo $tuesday_1 ['subject_4_2_1'] ?></li>
                        <li><?php echo $tuesday_1 ['subject_5_2_1'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $wednesday_1  = get_field('wednesday_1');
        if( $wednesday_1 ): ?>
        <div class="schedule-card"><strong>Середа</strong>
                <ol> 
                        <li><?php echo $wednesday_1 ['subject_1_3_1'] ?></li>
                        <li><?php echo $wednesday_1 ['subject_2_3_1'] ?></li>
                        <li><?php echo $wednesday_1 ['subject_3_3_1'] ?></li>
                        <li><?php echo $wednesday_1 ['subject_4_3_1'] ?></li>
                        <li><?php echo $wednesday_1 ['subject_5_3_1'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $thursday_1  = get_field('thursday_1');
        if( $thursday_1 ): ?>
        <div class="schedule-card"><strong>Четверг</strong>
                <ol> 
                        <li><?php echo $thursday_1 ['subject_1_4_1'] ?></li>
                        <li><?php echo $thursday_1 ['subject_2_4_1'] ?></li>
                        <li><?php echo $thursday_1 ['subject_3_4_1'] ?></li>
                        <li><?php echo $thursday_1 ['subject_4_4_1'] ?></li>
                        <li><?php echo $thursday_1 ['subject_5_4_1'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $friday_1  = get_field('friday_1');
        if( $friday_1 ): ?>
        <div class="schedule-card"><strong>П'ятниця</strong>
                <ol> 
                        <li><?php echo $friday_1 ['subject_1_5_1'] ?></li>
                        <li><?php echo $friday_1 ['subject_2_5_1'] ?></li>
                        <li><?php echo $friday_1 ['subject_3_5_1'] ?></li>
                        <li><?php echo $friday_1 ['subject_4_5_1'] ?></li>
                        <li><?php echo $friday_1 ['subject_5_5_1'] ?></li>
                </ol>
        </div>
        <?php endif; ?>
</section>
        <!-- end 1 class -->


        <!-- 2 class -->
<section class="schedule-2-class">
        <div class="block-schedule-title">
                <h3>2 Клас</h3>
        </div>
        <?php 
        $monday_2 = get_field('monday_2');
        if( $monday_2 ): ?>
        <div class="schedule-card"><strong>Понеділок</strong>
                <ol>
                        <li id="first-subject-2"><?php echo $monday_2 ['subject_1_1_2'] ?></li>
                        <li><?php echo $monday_2 ['subject_2_1_2'] ?></li>
                        <li><?php echo $monday_2 ['subject_3_1_2'] ?></li>
                        <li><?php echo $monday_2 ['subject_4_1_2'] ?></li>
                        <li><?php echo $monday_2 ['subject_5_1_2'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $tuesday_2  = get_field('tuesday_2');
        if( $tuesday_2 ): ?>
        <div class="schedule-card"><strong>Вівторок</strong>
                <ol> 
                        <li><?php echo $tuesday_2 ['subject_1_2_2'] ?></li>
                        <li><?php echo $tuesday_2 ['subject_2_2_2'] ?></li>
                        <li><?php echo $tuesday_2 ['subject_3_2_2'] ?></li>
                        <li><?php echo $tuesday_2 ['subject_4_2_2'] ?></li>
                        <li><?php echo $tuesday_2 ['subject_5_2_2'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $wednesday_2  = get_field('wednesday_2');
        if( $wednesday_2 ): ?>
        <div class="schedule-card"><strong>Середа</strong>
                <ol> 
                        <li><?php echo $wednesday_2 ['subject_1_3_2'] ?></li>
                        <li><?php echo $wednesday_2 ['subject_2_3_2'] ?></li>
                        <li><?php echo $wednesday_2 ['subject_3_3_2'] ?></li>
                        <li><?php echo $wednesday_2 ['subject_4_3_2'] ?></li>
                        <li><?php echo $wednesday_2 ['subject_5_3_2'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $thursday_2  = get_field('thursday_2');
        if( $thursday_2 ): ?>
        <div class="schedule-card"><strong>Четверг</strong>
                <ol> 
                        <li><?php echo $thursday_2 ['subject_1_4_2'] ?></li>
                        <li><?php echo $thursday_2 ['subject_2_4_2'] ?></li>
                        <li><?php echo $thursday_2 ['subject_3_4_2'] ?></li>
                        <li><?php echo $thursday_2 ['subject_4_4_2'] ?></li>
                        <li><?php echo $thursday_2 ['subject_5_4_2'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $friday_2  = get_field('friday_2');
        if( $friday_2 ): ?>
        <div class="schedule-card"><strong>П'ятниця</strong>
                <ol> 
                        <li><?php echo $friday_2 ['subject_1_5_2'] ?></li>
                        <li><?php echo $friday_2 ['subject_2_5_2'] ?></li>
                        <li><?php echo $friday_2 ['subject_3_5_2'] ?></li>
                        <li><?php echo $friday_2 ['subject_4_5_2'] ?></li>
                        <li><?php echo $friday_2 ['subject_5_5_2'] ?></li>
                </ol>
        </div>
        <?php endif; ?>
</section>
<!-- end 2 class -->


<!-- 3 class -->
<section class="schedule-3-class">
        <div class="block-schedule-title">
                <h3>3 Клас</h3>
        </div>
        <?php 
        $monday_3 = get_field('monday_3');
        if( $monday_3 ): ?>
        <div class="schedule-card"><strong>Понеділок</strong>
                <ol>
                        <li id="first-subject-3"><?php echo $monday_3 ['subject_1_1_3'] ?></li>
                        <li><?php echo $monday_3 ['subject_2_1_3'] ?></li>
                        <li><?php echo $monday_3 ['subject_3_1_3'] ?></li>
                        <li><?php echo $monday_3 ['subject_4_1_3'] ?></li>
                        <li><?php echo $monday_3 ['subject_5_1_3'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $tuesday_3  = get_field('tuesday_3');
        if( $tuesday_3 ): ?>
        <div class="schedule-card"><strong>Вівторок</strong>
                <ol> 
                        <li><?php echo $tuesday_3 ['subject_1_2_3'] ?></li>
                        <li><?php echo $tuesday_3 ['subject_2_2_3'] ?></li>
                        <li><?php echo $tuesday_3 ['subject_3_2_3'] ?></li>
                        <li><?php echo $tuesday_3 ['subject_4_2_3'] ?></li>
                        <li><?php echo $tuesday_3 ['subject_5_2_3'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $wednesday_3  = get_field('wednesday_3');
        if( $wednesday_3 ): ?>
        <div class="schedule-card"><strong>Середа</strong>
                <ol> 
                        <li><?php echo $wednesday_3 ['subject_1_3_3'] ?></li>
                        <li><?php echo $wednesday_3 ['subject_2_3_3'] ?></li>
                        <li><?php echo $wednesday_3 ['subject_3_3_3'] ?></li>
                        <li><?php echo $wednesday_3 ['subject_4_3_3'] ?></li>
                        <li><?php echo $wednesday_3 ['subject_5_3_3'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $thursday_3  = get_field('thursday_3');
        if( $thursday_3 ): ?>
        <div class="schedule-card"><strong>Четверг</strong>
                <ol> 
                        <li><?php echo $thursday_3 ['subject_1_4_3'] ?></li>
                        <li><?php echo $thursday_3 ['subject_2_4_3'] ?></li>
                        <li><?php echo $thursday_3 ['subject_3_4_3'] ?></li>
                        <li><?php echo $thursday_3 ['subject_4_4_3'] ?></li>
                        <li><?php echo $thursday_3 ['subject_5_4_3'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $friday_3  = get_field('friday_3');
        if( $friday_3 ): ?>
        <div class="schedule-card"><strong>П'ятниця</strong>
                <ol> 
                        <li><?php echo $friday_3 ['subject_1_5_3'] ?></li>
                        <li><?php echo $friday_3 ['subject_2_5_3'] ?></li>
                        <li><?php echo $friday_3 ['subject_3_5_3'] ?></li>
                        <li><?php echo $friday_3 ['subject_4_5_3'] ?></li>
                        <li><?php echo $friday_3 ['subject_5_5_3'] ?></li>
                </ol>
        </div>
        <?php endif; ?>
</section>
<!-- end 3 class -->


<!-- 4 class -->
<section class="schedule-4-class">
        <div class="block-schedule-title">
                <h3>4 Клас</h3>
        </div>
        <?php 
        $monday_4 = get_field('monday_4');
        if( $monday_4 ): ?>
        <div class="schedule-card"><strong>Понеділок</strong>
                <ol>
                        <li id="first-subject-4"><?php echo $monday_4 ['subject_1_1_4'] ?></li>
                        <li><?php echo $monday_4 ['subject_2_1_4'] ?></li>
                        <li><?php echo $monday_4 ['subject_3_1_4'] ?></li>
                        <li><?php echo $monday_4 ['subject_4_1_4'] ?></li>
                        <li><?php echo $monday_4 ['subject_5_1_4'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $tuesday_4  = get_field('tuesday_4');
        if( $tuesday_4 ): ?>
        <div class="schedule-card"><strong>Вівторок</strong>
                <ol> 
                        <li><?php echo $tuesday_4 ['subject_1_2_4'] ?></li>
                        <li><?php echo $tuesday_4 ['subject_2_2_4'] ?></li>
                        <li><?php echo $tuesday_4 ['subject_3_2_4'] ?></li>
                        <li><?php echo $tuesday_4 ['subject_4_2_4'] ?></li>
                        <li><?php echo $tuesday_4 ['subject_5_2_4'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $wednesday_4  = get_field('wednesday_4');
        if( $wednesday_4 ): ?>
        <div class="schedule-card"><strong>Середа</strong>
                <ol> 
                        <li><?php echo $wednesday_4 ['subject_1_3_4'] ?></li>
                        <li><?php echo $wednesday_4 ['subject_2_3_4'] ?></li>
                        <li><?php echo $wednesday_4 ['subject_3_3_4'] ?></li>
                        <li><?php echo $wednesday_4 ['subject_4_3_4'] ?></li>
                        <li><?php echo $wednesday_4 ['subject_5_3_4'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $thursday_4  = get_field('thursday_4');
        if( $thursday_4 ): ?>
        <div class="schedule-card"><strong>Четверг</strong>
                <ol> 
                        <li><?php echo $thursday_4 ['subject_1_4_4'] ?></li>
                        <li><?php echo $thursday_4 ['subject_2_4_4'] ?></li>
                        <li><?php echo $thursday_4 ['subject_3_4_4'] ?></li>
                        <li><?php echo $thursday_4 ['subject_4_4_4'] ?></li>
                        <li><?php echo $thursday_4 ['subject_5_4_4'] ?></li>
                </ol>
        </div>
        <?php endif; ?>

        <?php 
        $friday_4  = get_field('friday_4');
        if( $friday_4 ): ?>
        <div class="schedule-card"><strong>П'ятниця</strong>
                <ol> 
                        <li><?php echo $friday_4 ['subject_1_5_4'] ?></li>
                        <li><?php echo $friday_4 ['subject_2_5_4'] ?></li>
                        <li><?php echo $friday_4 ['subject_3_5_4'] ?></li>
                        <li><?php echo $friday_4 ['subject_4_5_4'] ?></li>
                        <li><?php echo $friday_4 ['subject_5_5_4'] ?></li>
                </ol>
        </div>
        <?php endif; ?>
</section>
<!-- end 4 class -->
<?php } ?>
<!-- End Schedule Block -->
</div>
</main>


<div class="footer-photo-school"></div>

<?php get_footer(); ?>