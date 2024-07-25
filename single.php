<?php 
/*
 Theme Name: myTheme
 Theme URI:
 Author: Илья Обухов
 Author URI: 
 Description: Тестовая тема
 Version: 1.0
 License: GNU General Public License v2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 Tags:
 Text Domain:
*/
?>
<?php get_header('single'); ?>
<!-- HEADER -->	
<!-- <?php echo get_post_format() ?> -->	

<?php //if (get_post_format()) {return get_template_part('single', get_post_format());} ?>

<div id="singlePage<?php echo get_post_format(); ?>" <?php post_class('container'); ?>>

<?php get_template_part( 'seo' ); ?>	

<div class="row mx-auto">
<main class="col-12 col-lg-9">
<!-- -->
<article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" class="article-post post shadow p-3 mb-5 bg-body rounded">
<span itemprop="articleSection"><?php the_category(',') ?></span>
<h1 itemprop="headline" class="postTitle"><?php the_title(); ?></h1>	

<span itemprop="datePublished" class="text-secondary"><?php the_time('F j, Y')?> <sup class="">Пост был изменен: <?php the_modified_date('F j, Y в G:i')?></sup></span>
<span itemprop="author"></span>
<p class="text-right small-text"><?php the_tags(null, ' | ')?></p >
<hr class="my-4">
<div class="newsContent row" itemprop="articleBody"><?php the_content(); ?></div>
</article><!-- <?php the_ID(); ?> -->

<!-- * Архив * -->	
<?php if ( is_user_logged_in() && current_user_can( 'administrator' ) ) : ?>
<section class="row my-5" style="text-align:center;">
<h3><?php the_field('pdfTitle'); ?></h3>
<img src="<?php the_field('pdfImg') ?>" style="max-width:300px;" class="img-fluid">
<?php if( get_field('pdfLink') ): ?><a href="<?php the_field('pdfLink')?>" class="btn btn-secondary my-2" target="_blank">Скачать</a><?php endif; ?>	
</section>
<?php endif; ?>
<!-- * /Архив * -->	

	
<!-- * Яндекс * -->	
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-size="l" data-services="messenger,vkontakte,odnoklassniki,telegram,moimir,lj" style="text-align:center;"></div>
<!-- * /Яндекс * -->
	
	
<section class="row m-3" role="group" aria-label="Простой пример">
<div class="col-6">	
<?php previous_post_link('<button type="button" class="col-12 btn btn-outline-primary text-white" aria-describedby="NextPost" title="1">%link</button>'); ?>	
<small id="NextPost" class="form-text text-muted">Предыдущий материал</small>
</div>
<div class="col-6">	
<?php next_post_link('<button type="button" class="col-12 btn btn-outline-primary text-white" aria-describedby="NextPost">%link', '<i class=""></i> %title</button>'); ?>
<small id="NextPost" class="form-text text-muted">Следующий материал</small>
</div>
</section> 
	
  

 

	
<section>
<?php $orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=>10, // Количество похожих записей для отображения.
'caller_get_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {

echo '<hr class="my-5";>';

while( $my_query->have_posts() ) {
$my_query->the_post(); ?>

<div class="card mb-5 d-print-none shadow p-3 rounded">
  <div class="row no-gutters">
<?php 
	if( has_post_thumbnail() ) {
		echo '<img src="' , the_post_thumbnail_url('full') , '" class="img-fluid">';
	}
	else {
		echo '';
	}
?>
    <div class="col-md">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(''); ?></p>
        <p class="card-text"><small class="text-muted"><a href="<? the_permalink()?>">Подробнее</a></small></p>
      </div>
    </div>
  </div>
</div>
<? }
echo '';
}
}
$post = $orig_post;
wp_reset_query(); ?>
</section><!-- /section -->
</main><!-- /main -->
	
<aside id="sidebar" class="col-12 col-lg-3 d-print-none"><?php get_sidebar(); ?></aside><!-- /aside -->
	
</div><!-- /row -->
</div><!-- /container -->

<!-- FOOTER -->	
<?php get_footer(); ?>