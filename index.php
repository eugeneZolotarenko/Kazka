<?php get_header(); ?>

    <!-- Background video -->
    <section class="main-part" data-vide-options="muted: true"  data-vide-bg='<?php echo get_stylesheet_directory_uri(); ?>/video/mainVideo'>
        <div class="bg-color">

            <!-- Letters -->
            <div class="letters-container">
                <div class="letters letter-k-1">K</div>
                <div class="letters letter-a-1">A</div>
                <div class="letters letter-z" >Z</div>
                <div class="letters letter-k-2">K</div>
                <div class="letters letter-a-2">A</div>
             </div> 

              <!--Elipses  -->
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
    </section>

    <!-- About -->

    <section class="about">
        <div class="clouds"></div>
            <h4><strong>K</strong>AZ<strong>K</strong>A</h4>
            <h5>це</h5>
            <!-- <p><strong>Н</strong>авчальний заклад, що забезпечує реалізацію права громадян на здобуття дошкільної та початкової загальної середньої освіти, 
                створений рішенням Білоцерківської міської ради та знаходиться в міській комунальній власності.</p>
            <p><strong>Д</strong>ошкільний підрозділ – дошкільний навчальний заклад (ясла-садок) комбі­но­ва­но­го типу для дітей віком від двох до шести (семи) років,
                 у складі якого 6 гру­п загального розвитку.</p> 
            <p><strong>Ш</strong>кільний підрозділ забезпечує відповідний рівень загальноосвітньої підготовки учнів згідно з вимогами Державного стандарту початкової загальної освіти.
                 У складі шкільного під­роз­ділу  функціонує група про­до­в­же­но­го дня. </p>    -->
                 <p><?php the_field('about_kazka'); ?></p>
            <div class="green-wave"></div>
    </section>

    <!-- NEWS -->
    <section class="news-container">
        <h2> <strong>О</strong>СТА<strong>Н</strong>НІ П<strong>О</strong>ДІ<strong>Ї</strong></h2>
        <div class="news-grid">

     <?php 
        // параметры по умолчанию
        $posts = get_posts( array(
	        'numberposts' => 3,
	        'category'    => 0,
	        'orderby'     => 'date',
	        'post_type'   => 'post',
	        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
        setup_postdata($post);
        ?> 
            <div class="new-card" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="content">
                    <p class="text"><?php the_excerpt(); ?></p>
                        <div class="date">
                        <?php the_time('j F Y'); ?>
                        </div>
                    <a href="<?php the_permalink(); ?>" class="button">Читати більше</a>
                </div>
            </div>
        <?php
        
}

wp_reset_postdata(); // сброс
        ?>



<!-- <div class="new-card new-card-2">
                <h3 class="title"><a href="#"><?php the_title(); ?></h3>
                <div class="content">
                    <p class="text"><?php the_excerpt(); ?></p>
                            <div class="date">
                            <?php the_time('j F Y'); ?>
                            </div>
                    <a href="#" class="button">Читати більше</a>
                </div>
            </div>
            <div class="new-card new-card-3">
                <h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
                <div class="content">
                    <p class="text"><?php the_excerpt(); ?></p>
                            <div class="date">
                            <?php the_time('j F Y'); ?>
                            </div>
                    <a href="#" class="button">Читати більше</a>
                </div>          
            </div>   -->


<!-- 
            <div class="new-card new-card-2">
                <h3 class="title"><a href="#"><strong>Ф</strong>ізичне фихвання дітей</a></h3>
                <div class="content">
                    <p class="text"><strong>В</strong>имоги сучасності потребують переорієнтації змісту виховання під
                            ростаючого покоління, зміщення акцентів на створення умов для по
                            ступального, повноцінного, всебічного розвитку особистості.</p>
                            <div class="date">
                                    <span class="day">13</span>
                                    <span class="month"><strong>В</strong>ересня</span>
                                    <span class="year">2018</span>
                            </div>
                    <a href="#" class="button">Читати більше</a>
                </div>
            </div>
            <div class="new-card new-card-3">
                <h3 class="title"><a href="#"><strong>М</strong>ова - то мудрості промінь, слово - то думка людська</a></h3>
                <div class="content">
                    <p class="text"><strong>Я</strong>к парость виноградної лози,
                            Плекайте мову <br> Пильно й ненастанно. <br>Політь бур'ян.<br>Чистіша від сльози<br>Вона хай буде.<br>         
                            Вірно і слухняно</p>
                            <div class="date">
                                    <span class="day">16</span>
                                    <span class="month"><strong>Ж</strong>овтня</span>
                                    <span class="year">2018</span>
                            </div>
                    <a href="#" class="button">Читати більше</a>
                </div>          
            </div>       -->
        </div>
        <div class="blue-wave"></div>
    </section>

    <!-- Child -->
    <section class="child-container">
        <div class="child-fish"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/child-fish.png" alt=""></div>
        <div class="child-jallyfish"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/child-jallyfish.png" alt=""></div>
        <div class="child-wave"></div>
        <div class="child-wrapper">
            <div class="text"> 
                <p> Роздуми про школу, мрію і майбутнє. <br>

Якщо уявити, що доросле життя - це політ у космос, то наша школа - це тренувальний табір для маленьких космонавтів.
Тут нас навчають, випробовують і загартовують для того, щоб ми згодом відірвалися від Землі та помчали до зірок, назустріч новому, невідомому і цікавому.
У кожного буде свій шлях і своя зірка. Ми з моїм однокласником Ілюшею вирішили летіти на Марс разом, він буде пілотом, а я хіміком. Впевнений, що у майбутньому нас чекає безліч пригод та відкриттів.
А доти нам слід сумлінно тренуватися, щоб бути готовими і впевненими у своїх силах і знаннях. Тож, ми побігли до свого космодрому. 
До запуску залишилось 4 роки. <br>
Відлік пішов.</p> 
                    <p><strong>О</strong>лександр Підопригора</p>
            </div>
            <div class="child"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/child-min.jpg" alt=""></div>
        </div>
    </section>

    <!-- Beach-line -->
    <div class="beach-line"></div>

    <!-- Gallery -->
    <section class="best-photos-skills">
        <div class="best-photos">
            <h2><strong>Н</strong>АЙ<strong>Я</strong>СКРА<strong>В</strong>ІШІ МО<strong>М</strong>ЕН<strong>Т</strong>И</h2>
            <div class="images">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7454_1.jpg" class="kids-item kinder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7454_1_1.jpg" alt="">
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_2010_1.jpg" class="kids-item school">
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_2010_1_1.jpg" alt="">
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7433_1.jpg" class="kids-item kinder">
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7433_1_1.jpg" alt="">
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_1987.jpg" class="kids-item school">
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_1987_1.jpg" alt="">
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7481_1.jpg" class="kids-item kinder">
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_7481_1_1.jpg" alt="">
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_1960_1.jpg" class="kids-item school">
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/D6K_1960_1_1.jpg" alt="">
                </a>
            </div>
            <div class="buttons" id="controls">
                <a class="category-item red " id="school" >Початкова Школа</a>
                <a class="category-item active" id="all">Всі фото</a>
                <a class="category-item blue " id="kinder">Дитячий Садочок</a>
            </div>
        </div>
        <div class="skills">
            <div class="skill-block">
                <div class="skill">
                    <img class="photo-skill-1" src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill-students.png" alt="Учнів">
                    <span><?php the_field('number_students'); ?><strong>+</strong></span>
                    <p><strong>У</strong>чнів</p>
                </div>
                <div class="skill">
                    <img class="photo-skill-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill-teacher.png" alt="Вчителів">
                    <span><?php the_field('number_teachers'); ?><strong>+</strong></span>
                    <p><strong>В</strong>чителів</p>
                </div>
                <div class="skill">
                    <img class="photo-skill-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill-kinder.png" alt="Вихованців">
                    <span><?php the_field('number_kids'); ?><strong>+</strong></span>
                    <p><strong>В</strong>ихованців</p>
                </div>
                <div class="skill">
                    <img class="photo-skill-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/skill-nurse.png" alt="Вихователів">
                    <span><?php the_field('number_tutors'); ?><strong>+</strong></span>
                    <p><strong>В</strong>ихователів</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Parallax-photo -->
        <div class="footer-photo"></div>

	<?php get_footer(); ?>