<?php
/**
 * Template Name: Template News Team
 */
get_header(); 
?>

<div class="header-photo-news">
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

<main class="news-wrapper">
    <div class="cloud-wrapper"><div class="clouds"></div></div>
    <div class="news-wrapper-content">
        <div class="pink-wave-title">
            <h3 class="title"><?php the_title(); ?></h3>
        </div>
        <div class="news-content">
            <!-- Main Page News -->

    <?php if (is_page('news')) { ?>
            <?php
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
         $args = array(
	         'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
	           'paged'          => $current_page // текущая страница
              );
          query_posts( $args );
 
        $wp_query->is_archive = true;
      $wp_query->is_home = false;
 
       while(have_posts()): the_post();
	   ?>
    <article class="post">
                    <div class="post-thumb">
                        <!-- For Desctop/Mobile -->
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('news_thumb'); ?>
                        </a>
                         <!-- For Tablet -->
                         <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('news_thumb_tablet'); ?>
                        </a>
                        <!-- Extra Small -->
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('news_thumb_extra_small'); ?>
                        </a>
                    </div>
                    <div class="post-header-content">
                        <div class="post-header">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                                <time class="post-date"><?php the_time('j F Y'); ?></time>
                            </a>
                        </div>
                        <div class="post-content">
                           <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <a class="read-more-news" href="<?php the_permalink(); ?>"><i class="fas fa-angle-right"></i></a>
        </article>
	<?php
endwhile;
     
if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации
?>
<?php the_posts_pagination(); ?>
<?php } ?>



            <!-- End Main Page News -->
        </div> 
    </div> 
  
<?php if (is_page('personal')) { ?>

<!-- Administration -->
<div class="team-nav-line">
        <span>Швидкий Перехід:</span>  
        <a class="team-nav team-nav-1" href="#">Адміністрація</a>
        <a class="team-nav team-nav-2" href="#">Вчителі</a>
        <a class="team-nav team-nav-3" href="#">Вихователі</a>
        <a class="team-nav team-nav-4" href="#">Спеціалісти</a>
        <a class="team-nav team-nav-5" href="#">Технічний Персонал</a>
</div>

<h2 class="team-title admin-title">Адміністрація</h2>

    <div class="team admin">
<?php

$categories = get_categories(array(
	'type'                     => 'team',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'ID',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '28',
	'number'                   => '',
	'taxonomy'                 => 'categories_workers',
	'pad_counts'               => false )); 
foreach($categories as $category) {
    $cat = $category->cat_ID;

	$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'categories_workers',
			'field' => 'id',
			'terms' => $cat,
		)
	),
	'post_type' => 'team',
    'posts_per_page' => 0,
    'numberposts' => 50,
);
$posts = get_posts( $args );
	if($posts) {
		foreach( $posts as $post ) :	
            setup_postdata($post);
            ?>
            
    <div class="team-card"  style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
        <div class="worker-info">
    <h4><?php the_title(); ?></h4>
    
    <?php the_content(); ?>
            <div class="team-icons">
                <a target="_blank" class="team-social" href="<?php the_field('icon_facebook')?>"><i class="fab fa-facebook-square"></i></a> 
                <a target="_blank" class="team-social" href="<?php the_field('icon_insta')?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>


            <?php
		endforeach;
	}
}
?>
</div>
<!-- End Administration -->


<!-- Tachers -->
<h2 class="team-title teachers-title">Вчителі</h2>
    <div class="team teachers">
<?php

$categories = get_categories(array(
	'type'                     => 'team',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'ID',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '27',
	'number'                   => '',
	'taxonomy'                 => 'categories_workers',
	'pad_counts'               => false )); 
foreach($categories as $category) {
    $cat = $category->cat_ID;

	$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'categories_workers',
			'field' => 'id',
			'terms' => $cat,
		)
	),
	'post_type' => 'team',
    'posts_per_page' => 0,
    'numberposts' => 50,
);
$posts = get_posts( $args );
	if($posts) {
		foreach( $posts as $post ) :	
            setup_postdata($post);
            ?>
            
    <div class="team-card"  style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="worker-info">
    <h4><?php the_title(); ?></h4> 
    <?php the_content(); ?>
            <div class="team-icons">
                <a target="_blank" class="team-social" href="<?php the_field('icon_facebook')?>"><i class="fab fa-facebook-square"></i></a> 
                <a target="_blank" class="team-social" href="<?php the_field('icon_insta')?>"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    </div>


            <?php
		endforeach;
	}
}
?>
</div>
<!-- End Tachers -->
 
<!-- Tuters -->
<h2 class="team-title tuters-title">Вихователі</h2>
    <div class="team tuters">
<?php

$categories = get_categories(array(
	'type'                     => 'team',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'ID',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '29',
	'number'                   => '',
	'taxonomy'                 => 'categories_workers',
	'pad_counts'               => false )); 
foreach($categories as $category) {
    $cat = $category->cat_ID;

	$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'categories_workers',
			'field' => 'id',
			'terms' => $cat,
		)
	),
	'post_type' => 'team',
    'posts_per_page' => 0,
    'numberposts' => 50,
);
$posts = get_posts( $args );
	if($posts) {
		foreach( $posts as $post ) :	
            setup_postdata($post);
            ?>
            
    <div class="team-card"  style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="worker-info">
    <h4><?php the_title(); ?></h4> 
    <?php the_content(); ?>
            <div class="team-icons">
                <a target="_blank" class="team-social" href="<?php the_field('icon_facebook')?>"><i class="fab fa-facebook-square"></i></a> 
                <a target="_blank" class="team-social" href="<?php the_field('icon_insta')?>"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    </div>


            <?php
		endforeach;
	}
}
?>
</div>
<!-- End Tuters -->


<!-- Specialists -->
<h2 class="team-title specialists-title">Спеціалісти</h2>
    <div class="team specialists">
<?php

$categories = get_categories(array(
	'type'                     => 'team',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'ID',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '30',
	'number'                   => '',
	'taxonomy'                 => 'categories_workers',
	'pad_counts'               => false )); 
foreach($categories as $category) {
    $cat = $category->cat_ID;

	$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'categories_workers',
			'field' => 'id',
			'terms' => $cat,
		)
	),
	'post_type' => 'team',
    'posts_per_page' => 0,
    'numberposts' => 50,
);
$posts = get_posts( $args );
	if($posts) {
		foreach( $posts as $post ) :	
            setup_postdata($post);
            ?>
            
    <div class="team-card"  style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="worker-info">
    <h4><?php the_title(); ?></h4> 
    <?php the_content(); ?>
            <div class="team-icons">
                <a target="_blank" class="team-social" href="<?php the_field('icon_facebook')?>"><i class="fab fa-facebook-square"></i></a> 
                <a target="_blank" class="team-social" href="<?php the_field('icon_insta')?>"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    </div>


            <?php
		endforeach;
	}
}
?>
</div>
<!-- End Tuters -->



<!-- Workers -->
<h2 class="team-title workers-title">Технічний Персонал</h2>
    <div class="team workers">
<?php

$categories = get_categories(array(
	'type'                     => 'team',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'ID',
	'order'                    => 'ASC',
	'hide_empty'               => 0,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '31',
	'number'                   => '',
	'taxonomy'                 => 'categories_workers',
	'pad_counts'               => false )); 
foreach($categories as $category) {
    $cat = $category->cat_ID;

	$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'categories_workers',
			'field' => 'id',
			'terms' => $cat,
		)
	),
	'post_type' => 'team',
    'posts_per_page' => 0,
    'numberposts' => 50,
);
$posts = get_posts( $args );
	if($posts) {
		foreach( $posts as $post ) :	
            setup_postdata($post);
            ?>
            
    <div class="team-card"  style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="worker-info">
    <h4><?php the_title(); ?></h4> 
    <?php the_content(); ?>
            <div class="team-icons">
                <a target="_blank" class="team-social" href="<?php the_field('icon_facebook')?>"><i class="fab fa-facebook-square"></i></a> 
                <a target="_blank" class="team-social" href="<?php the_field('icon_insta')?>"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    </div>


            <?php
		endforeach;
	}
}
?>
</div>
<!-- End Workers -->

<?php } ?>

<!-- Адміністрація, Вихователі, Вчителі, Спеціалісти, Технічний Персонал -->

</main>


<div class="footer-photo-news">
</div>

<?php get_footer(); ?>

