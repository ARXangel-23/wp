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
<?php get_header('attachment'); ?>
<!-- HEADER -->	
<!-- <?php echo get_post_format() ?> -->	

<?php //if (get_post_format()) {return get_template_part('single', get_post_format());} ?>

<div class="row mx-auto">
  <div class="col-2"></div>
<main class="col-8 ">
<!-- -->
<article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" class="article-post post shadow p-3 mb-5 bg-body rounded">

<figure id="postIDimg<?php echo get_the_ID(); ?>" class="postFigure">
  <img src="<?php echo wp_get_attachment_url(get_the_ID()); ?>" class="img-fluid" alt="" title="">
  <figcaption><?php echo wp_get_attachment_caption(get_the_ID());?></figcaption>
</figure>

<?php

/*
  echo 'Функция | Получает URL вложения.';
  echo  
  echo '<br>';
  
  echo 'Функция | Получает URL миниатюры для вложения.';
  echo wp_get_attachment_thumb_url(get_the_ID()); 
  echo '<br>';

  echo '<b>Функция | Получает метаданные вложения по ID вложения.</b>';
  echo '<pre>';
  print_r (wp_get_attachment_metadata(get_the_ID()));
  echo '</pre>';

  echo '<b>Функция | Получает ссылку на страницу вложения с использованием изображения или значка, если это возможно.</b>';
  echo '<pre>';
  print_r (wp_get_attachment_metadata(get_the_ID()));
  echo '</pre>';

  echo '<b>Функция | Получает элемент HTML img, представляющий изображение-вложение.</b>';
  echo  wp_get_attachment_image(get_the_ID());
  echo '<br>';

  echo '<b>Функция | Получает изображение для представления вложения.</b>';
  echo '<pre>';
  print_r (wp_get_attachment_image_src(get_the_ID()));
  echo '</pre>';

  echo '<b>Функция | Получает значение для атрибута srcset изображения-вложения.</b>';
  echo wp_get_attachment_image_srcset(get_the_ID());
  echo '<br>';
  
  echo '<b>Функция | Получает URL изображения-вложения.</b>';
  echo wp_get_attachment_image_url(get_the_ID());
  echo '<br>';
  
  echo '<b>Функция | Получает значение для атрибута "sizes" изображения-вложения.</b>';
  echo wp_get_attachment_image_sizes(get_the_ID());
  echo '<br>';

  echo '<b>Функция | Возвращает полезные ключи для поиска данных из метаданных, хранящихся вложениями.</b>';
  echo '<pre>';
  print_r (wp_get_attachment_id3_keys(get_the_ID()));
  echo '</pre>';

  echo '<b>Функция | Получает заголовок для вложения.</b>';
  echo  wp_get_attachment_caption(get_the_ID());
  echo '<br>';

  echo '<b>Функция | Извлекает постоянную ссылку на вложение.</b>';
  echo  get_attachment_link(get_the_ID());
  echo '<br>';
*/  


	?>


</article><!-- <?php the_ID(); ?> -->
 
</main><!-- /main -->
<div class="col-2"></div>
	
</div><!-- /row -->
</div><!-- /container -->

<!-- FOOTER -->	
<?php get_footer('attachment'); ?>