<?php /*
Template Name: Tag Archive
*/ ?>
<?php get_header('test'); ?>

<main id="str-<?php the_ID(); ?>" class="container-fluid bg-sm-primary bg-md-warning bg-lg-dark">

<section id="section1" class="container">
  <div class="row">
    <div class="col-12 col-lg-8 my-3" style="min-height:800px;">
        <div id="carouselNews" class="carousel slide carousel-dark">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div> <!-- carousel-indicators -->

          <div class="carousel-inner">
            <?php
              // Цикл 1 // Последние новости с превью
              $args = array(
              'posts_per_page' => 5,
              'post_type'  => 'post',
              'cat' => '1',
              'meta_query' => array(
              array(
              'key' => '_thumbnail_id',
              'compare' => 'EXISTS'
              )));
              $query1 = new WP_Query($args); // Последние новости
              while( $query1->have_posts() ){
              $query1->the_post();
              // Это первый пост в цикле if ( $query1->current_post == 0) {} else {}
              // Есть ли превью if( has_post_thumbnail() ) {} else {}	
              // вывод записей
              if ( $query1->current_post == 0) {?>
              <div class="carousel-item active">
                <figure id="" class="postFigure">
                  <a class="linkImg" title="<?php the_post_thumbnail_caption(); ?>" href="<?php the_post_thumbnail_url('full'); ?>" data-fancybox="gallery" data-caption="<?php the_post_thumbnail_caption(); ?>">
                  <img class="d-block w-100" src="<?php the_post_thumbnail_url('full'); ?>" title="<?php the_post_thumbnail_caption(); ?>"  alt="<?php the_post_thumbnail_caption(); ?> | <?php the_title(); ?>" />
                  </a>	
                  <figcaption class="posFigcaption d-none"><?php the_post_thumbnail_caption(); ?></figcaption>
                </figure>
                <div class="carousel-caption position-static mx-auto" style="width: 78%;">
                  <h5 class="bg-white bg-opacity-50" style=""><a href="<?php the_permalink()?>" class="postTitle titleLink" role="button" aria-disabled="true"><?php the_title()?></a></h5>
                  <span class="d-none small-text my-2 d-block text-start text-danger"><?php the_time("d M Y") ?></span>
                  <p class="d-none text-right small-text"><?php the_tags(null, ' | ')?></p>
                  <span class="newsBrief "><?php the_excerpt('')?></span>
                  <a href="<?php the_permalink()?>" class="d-none btn btn-primary my-3" role="button" aria-disabled="true">Подробнее</a>
                </div><!-- carousel-caption  end-->
              </div><!-- carousel-item active end -->

              <?php } else {?>

              <div class="carousel-item ">
                <figure id="" class="postFigure">
                  <a class="linkImg" title="<?php the_post_thumbnail_caption(); ?>" href="<?php the_post_thumbnail_url('full'); ?>" data-fancybox="gallery" data-caption="<?php the_post_thumbnail_caption(); ?>">
                  <img class="d-block w-100" src="<?php the_post_thumbnail_url('full'); ?>" title="<?php the_post_thumbnail_caption(); ?>"  alt="<?php the_post_thumbnail_caption(); ?> | <?php the_title(); ?>" />
                  </a>	
                  <figcaption class="posFigcaption d-none"><?php the_post_thumbnail_caption(); ?></figcaption>
                </figure>
                <div class="carousel-caption position-static mx-auto" style="width: 78%;">
                  <h5 class="bg-white bg-opacity-50" style=""><a href="<?php the_permalink()?>" class="postTitle titleLink" role="button" aria-disabled="true"><?php the_title()?></a></h5>
                  <span class="d-none small-text my-2 d-block text-start text-danger"><?php the_time("d M Y") ?></span>
                  <p class="d-none text-right small-text"><?php the_tags(null, ' | ')?></p>
                  <span class="newsBrief"><?php the_excerpt('')?></span>
                  <a href="<?php the_permalink()?>" class="d-none btn btn-primary my-3" role="button" aria-disabled="true">Подробнее</a>
                </div><!-- carousel-caption  end-->
              </div><!-- carousel-item end-->
              <?php }}
              wp_reset_postdata();
            ?>
          </div><!-- carousel-inner -->

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews" data-bs-slide="prev" style="background: rgba(0, 0, 0, 0.2); width: 10%;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselNews" data-bs-slide="next" style="background: rgba(0, 0, 0, 0.2); width: 10%;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div> <!-- carouselNews end -->
    </div> <!-- Слайдер с картикой-->

    <div class="col-12 col-lg-4 my-3 vh-100 overflow-auto" style="min-height:800px;">
      <?php
        // Цикл 2
        $args = array(
        'posts_per_page' => 10,
        'post_type'  => 'post',
        'cat' => '1',
        'meta_query' => array(
        array(
        'key' => '_thumbnail_id',
        'compare' => 'NOT EXISTS'
        )));
        $query0 = new WP_Query($args); // Последние посты без картинки
        while( $query0->have_posts() ){
        $query0->the_post();?>
        <div class="card bg-white mb-4" style="">
          <div class="card-body">
            <h5 class="card-title postTitle2"><?php the_title() ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
              <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
            </ul>
            <p class="card-text"></p>
          </div>
          <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
        </div><!-- card -->
        <?php }
        wp_reset_postdata();
      ?>
    </div><!-- Новости по дате без превью -->

    <div class="col-12 col-lg-3 my-3 d-none"><?php get_sidebar('banners'); ?></div><!-- Баннеры -->
    
  </div><!-- row -->
  <a href="" class="btn btn-outline-primary d-block my-4 mx-auto" style="width: 150px;">Все новости</a>
</section> <!-- section1 -->

<section id="section2" class="wow zoomInDown container-fluid section overflow-auto p-2" style="white-space:nowrap;" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">
  <div class="d-flex flex-row flex-nowrap">
    <?php
      // Цикл 2
      //echo '<div class="card-group">';
      $query2 = new WP_Query('cat=160&posts_per_page=10'); // все посты, кроме категории 2
      while( $query2->have_posts() ){
        $query2->the_post();?>
          <div class="card m-3" style="min-width: 300px;  white-space: normal;">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <div class="newsBrief text-truncate" data-bs-toggle="tooltip" data-bs-title="<?php echo get_the_excerpt()?>"><p class="card-text"><?php echo get_the_excerpt() ?></p></div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger" title="Изменен: <?php the_modified_date('d-m-Y в G:i')?>"><?php the_time("d M Y") ?></span></li>
              <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
            </ul>
            <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Смотреть</a></div>
          </div>
      <?php }
      wp_reset_postdata();
      //echo '</div>';
    ?>
  </div>
</section><!-- section2 Фотоальбом end-->
<a href="" class="btn btn-outline-primary d-block my-4 mx-auto" style="width: 150px;">Все фотоальбомы</a>

<section id="section3" class="section container mb-5 wow bounceInLeft border-2 border-start border-primary" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">  
 <div class="d-block border-2 border-bottom border-primary mb-4"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary">Твои люди, район!</span></div>
  <div class="row block-overflow row-cols-1 row-cols-sm-3 row-cols-lg-4 g-4" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="5"  data-wow-iteration="1" style="overflow-y: auto;">
    <?php
      // Цикл 3
      $query3 = new WP_Query('cat=1&tag=твои-люди-район&tag__not_in=93&posts_per_page=8');
      while( $query3->have_posts() ){
      $query3->the_post();?>
      <div class="col">
        <div class="card h-100" style="">
          <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
          <div class="card-body">
            <h5 class="card-title postTitle2"><?php the_title() ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger" title="Изменен: <?php the_modified_date('d-m-Y в G:i')?>"><?php the_time("d M Y") ?></span></li>
              <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
            </ul>
            <p class="card-text"><?php echo get_the_excerpt()?></p>
          </div>
          <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
        </div>
      </div>
    <?php } wp_reset_postdata(); ?>
  </div><!-- row -->

  <div class="accordion my-3" id="tagsSection3">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button text-white bg-dark bg-opacity-50 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetagsSection3" aria-expanded="true" aria-controls="collapsetagsSection3">
          Метки раздела
        </button>
      </h2>
      <div id="collapsetagsSection3" class="accordion-collapse collapse" >
        <div class="accordion-body list-inline">
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/твои-люди-район"><i class="bi bi-tags-fill"></i> | Твои люди, район!</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/юбилей"><i class="bi bi-tags-fill"></i> | Юбилей</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/связь-поколений-связь-времен"><i class="bi bi-tags-fill"></i> | Связь поколений – связь времен</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/книга-памяти/"><i class="bi bi-tags-fill"></i> | «Книга памяти»</a>
        </div> <!-- accordion-body -->
      </div> <!-- accordion-collapse -->
    </div> <!-- accordion-item -->
  </div> <!-- tagsSection3 -->
</section><!-- section3 Твои люди, район!-->

<section id="section4" class="container section mb-5 wow bounceInLeft border-2 border-start border-primary" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">
 <div class="d-block border-2 border-bottom border-primary my-4"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary"><span class="chapterTitle">Правопорядок</span></div>  
  <div class="row block-overflow row-cols-1 row-cols-sm-6 row-cols-lg-4 g-4" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="5"  data-wow-iteration="1" style="overflow-y: auto;">
    <?php 
        // Цикл 5
        $query5 = new WP_Query('cat=1&tag=омвд,мрэо,ондипр,криминформ,антинарко,прокуратура,огибдд,дтп,суд,проишествие,опдн,мчс,оуфмс,пдд,мошенники&posts_per_page=8'); // все посты, кроме категории 3
        while( $query5->have_posts() ){
        $query5->the_post();?>
      <div class="col">
        <div class="card h-100" style="">
          <div class="card-body">
            <h5 class="card-title postTitle2"><?php the_title() ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
              <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
            </ul>
            <div class="newsBrief text-truncate" data-bs-toggle="tooltip" data-bs-title="<?php the_excerpt()?>"><?php the_excerpt();?></div>
          </div>
          <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
        </div>
      </div>
        <?php }
        wp_reset_postdata();
    ?>
  </div><!-- row -->
  <div class="accordion my-3" id="tagsSection4">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetagsSection4" aria-expanded="true" aria-controls="collapsetagsSection4">
          Метки раздела
        </button>
      </h2>
      <div id="collapsetagsSection4" class="accordion-collapse collapse" >
        <div class="accordion-body list-inline">
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/омвд/"><i class="bi bi-tags-fill"></i> | ОМВД</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/антинарко"><i class="bi bi-tags-fill"></i> | Антинарко</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/прокуратура"><i class="bi bi-tags-fill"></i> | Прокуратура</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/огибдд"><i class="bi bi-tags-fill"></i> | ОГИБДД</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/дтп"><i class="bi bi-tags-fill"></i> | ДТП</a>
        </div> <!-- accordion-body -->
      </div> <!-- accordion-collapse -->
    </div> <!-- accordion-item -->
  </div> <!-- tagsSection4 -->
</section><!-- section4 Правопорядок-->

<section id="section5" class="container section mb-5 wow bounceInLeft border-2 border-start border-primary" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">
  <div class="d-block border-2 border-bottom border-primary my-3"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary"><span class="chapterTitle">Культура</span></div>
  <div class="row">
    <?php
    // Цикл 6
    $args = array(
      'posts_per_page' => 5,
      'post_type'  => 'post',
      'cat' => '1',
      'tag' => 'сдк,сдк-авангард,сдк-крыловский,сдк-новопашковский,сдк-новосергиевский,сдк-обильный,сдк-октябрь,сдк-октябрьский,сдк-павловский,сдк-шевченковский,ск-кугоейский',
      'meta_query' => array(
        array(
          'key' => '_thumbnail_id',
          'compare' => 'EXISTS'
        )));
    $query6 = new WP_Query($args);
    while( $query6->have_posts() ){
    $query6->the_post();
    if ($query6->current_post == 0) {?>
    <div class="col-12 col-lg-6 rounded mx-0">
      <div class="card h-100" style="">
        <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title postTitle2"><?php the_title() ?></h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
            <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
          </ul>
          <p class="newsBrief"><?php the_excerpt() ?></p>
        </div>
        <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
      </div>
    </div><!-- Первый пост-->

    <div class="col-12 col-lg-6 row p-0 m-0">
      <?php } elseif ($query6->current_post % 2)  {?>
        <div class="col-12 col-lg-6 pb-2 mb-2 rounded">
          <div class="card h-100" style="">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
            <div class="card-body">
              <h5 class="card-title postTitle2"><?php the_title() ?></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
                <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
              </ul>
              <p class="card-text"><?php //the_excerpt();?></p>
            </div>
            <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
          </div>
        </div><!-- col-6 end -->

        <?php } else { ?>
          <div class="col-12 col-lg-6 pb-2 mb-2 rounded">
          <div class="card h-100" style="">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                  <h5 class="card-title postTitle2"><?php the_title() ?></h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
                    <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
                  </ul>
                  <p class="card-text"><?php //the_excerpt();?></p>
                </div>
                <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
              </div>
          </div><!-- col-6 end -->
      <?php } } ?>
    </div><!-- col-8 -->
    <?php wp_reset_postdata(); ?>
  </div><!-- row -->
  <div class="accordion my-3" id="tagsSection5">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetagsSection5" aria-expanded="true" aria-controls="collapsetagsSection5">
          Метки раздела
        </button>
      </h2>
      <div id="collapsetagsSection5" class="accordion-collapse collapse" >
        <div class="accordion-body list-inline">
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк"><i class="bi bi-tags-fill"></i> | СДК</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-авангард"><i class="bi bi-tags-fill"></i> | СДК «Авангард»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-крыловский"><i class="bi bi-tags-fill"></i> | СДК «Крыловский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-новопашковский"><i class="bi bi-tags-fill"></i> | СДК «Новопашковский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-новосергиевский"><i class="bi bi-tags-fill"></i> | СДК «Новосергиевский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-обильный"><i class="bi bi-tags-fill"></i> | СДК «Обильный»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-октябрь"><i class="bi bi-tags-fill"></i> | СДК «Октябрь»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-октябрьский"><i class="bi bi-tags-fill"></i> | СДК «Октябрьский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-павловский"><i class="bi bi-tags-fill"></i> | СДК «Павловский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/сдк-шевченковский"><i class="bi bi-tags-fill"></i> | СДК «Шевченковский»</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/ск-кугоейский"><i class="bi bi-tags-fill"></i> | СДК «Кугоейскийд»</a>
        </div> <!-- accordion-body -->
      </div> <!-- accordion-collapse -->
    </div> <!-- accordion-item -->
  </div> <!-- tagsSection5 -->
</section><!-- section5 Культура -->

<!-- section5 Спорт -->
<section id="section6" class="container section mb-5 wow bounceInLeft border-2 border-start border-primary" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">
  <div class="d-block border-2 border-bottom border-primary my-3"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary"><span class="chapterTitle">Спорт</span></div>
  <div class="row row-cols-1 row-cols-sm-6 row-cols-lg-4 g-4" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="5"  data-wow-iteration="1">
    <?php
      // Цикл 7
      $args = array(
        'posts_per_page' => 8,
        'post_type'  => 'post',
        'cat' => '1',
        'tag' => 'ДЮСШ,футбол,гандбол,турнир,шахматы,соревнования,тяжелая атлетика,рукопашный бой,настольный теннис,бокс,первенство,шашки,ГТО,волейбол,спартакиада,мини-футбол,баскетбол,армрестлинг',
        'orderby' => 'rand',
        'meta_query' => array(
          array(
            'key' => '_thumbnail_id',
            'compare' => 'EXISTS'
          )));
      $query7 = new WP_Query($args);
      while( $query7->have_posts() ){
      $query7->the_post();?>
      <div class="col">
        <div class="card h-100" style="">
          <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
          <div class="card-body">
            <h5 class="card-title postTitle2"><?php the_title() ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
              <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
            </ul>
            <p class="newsBrief d-none"><?php //the_excerpt();?></p>
          </div>
          <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
        </div>
      </div>
      <?php }
      wp_reset_postdata();
    ?>
  </div><!-- row end -->
  <div class="accordion my-3" id="tagsSection6">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetagsSection6" aria-expanded="true" aria-controls="collapsetagsSection6">
          Метки раздела
        </button>
      </h2>
      <div id="collapsetagsSection6" class="accordion-collapse collapse" >
        <div class="accordion-body list-inline">
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/дюсш"><i class="bi bi-tags-fill"></i> | ДЮСШ</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/турнир"><i class="bi bi-tags-fill"></i> | Турнир</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/футбол"><i class="bi bi-tags-fill"></i> | Футбол</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/гандбол"><i class="bi bi-tags-fill"></i> | Гандбол</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/волейбол"><i class="bi bi-tags-fill"></i> | Волейбол</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/баскебол"><i class="bi bi-tags-fill"></i> | Баскебол</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/настольный-теннис/"><i class="bi bi-tags-fill"></i> | Настольный-теннис</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/рукопашный-бой/"><i class="bi bi-tags-fill"></i> | Рукопашный-бой</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/тяжелая-атлетика/"><i class="bi bi-tags-fill"></i> | Тяжелая атлетика</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/шахматы"><i class="bi bi-tags-fill"></i> | Шахматы</a>
          <a class="btn btn-primary list-inline-item m-1" href="https://avangard-93.ru/tag/шашки"><i class="bi bi-tags-fill"></i> | Шашки</a>
        </div> <!-- accordion-body -->
      </div> <!-- accordion-collapse -->
    </div> <!-- accordion-item -->
  </div> <!-- tagsSection6 -->
</section><!-- section6 Спорт end -->

<section id="section7" class="container section mb-5 wow bounceInLeft border-2 border-start border-primary" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="20"  data-wow-iteration="1">
  <div class="d-block border-2 border-bottom border-primary mt-5"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary"><span class="chapterTitle">Образование</span></div>
  <div class="row">
  <?php
    // Цикл 6
    $args = array(
      'posts_per_page' => 5,
      'post_type'  => 'post',
      'cat' => '1',
      'tag' => 'сош',
      'meta_query' => array(
        array(
          'key' => '_thumbnail_id',
          'compare' => 'EXISTS'
        )));
    $query6 = new WP_Query($args);
    while( $query6->have_posts() ){
    $query6->the_post();
    if ($query6->current_post == 0) {?>
    <div class="col-12 col-lg-6 rounded mx-0">
      <div class="card h-100" style="">
        <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title postTitle2"><?php the_title() ?></h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
            <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
          </ul>
          <p class="newsBrief"><?php the_excerpt() ?></p>
        </div>
        <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
      </div>
    </div><!-- Первый пост-->

    <div class="col-12 col-lg-6 row p-0 m-0">
      <?php } elseif ($query6->current_post % 2)  {?>
        <div class="col-12 col-lg-6 pb-2 mb-2 rounded">
          <div class="card h-100" style="">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
            <div class="card-body">
              <h5 class="card-title postTitle2"><?php the_title() ?></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
                <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
              </ul>
              <p class="card-text"><?php //the_excerpt();?></p>
            </div>
            <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
          </div>
        </div><!-- col-6 end -->

        <?php } else { ?>
          <div class="col-12 col-lg-6 pb-2 mb-2 rounded">
          <div class="card h-100" style="">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                  <h5 class="card-title postTitle2"><?php the_title() ?></h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="small-text m-0 p-0 text-start text-danger"><?php the_time("d M Y") ?></span></li>
                    <li class="list-group-item"><p class="text-right small-text"><?php the_tags(null, ' | ')?></p></li>
                  </ul>
                  <p class="card-text"><?php //the_excerpt();?></p>
                </div>
                <div class="card-footer"><a href="<?php the_permalink()?>" class="btn btn-outline-primary d-block card-link">Читать</a></div>
              </div>
          </div><!-- col-6 end -->
      <?php } } ?>
    </div><!-- col-8 -->
    <?php wp_reset_postdata(); ?>
  </div>
</section><!-- section7 Образование -->

<section id="section8" class="section overflow-auto wow bounceInLeft border-2 border-start border-primary" style="white-space:nowrap;">
  <div class="d-block border-2 border-bottom border-primary"><span class="chapterTitle d-inline-block text-white py-1 px-3 rounded-top bg-primary"><span class="chapterTitle">Наши поэты</span></div>
  <?php
    // Цикл 9
    $query9 = new WP_Query('cat=69&tag=стихи&posts_per_page=10'); // все посты, кроме категории 2
    while( $query9->have_posts() ){
    $query9->the_post();?>
    <div class="bg-white d-inline-block p-2 m-2 align-top position-relative" style="">
      <div class="card-body">
        <h5 class="card-title" style="white-space:normal;"><?php the_title(); ?></h5>
        <p class="fst-italic"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink()?>" class="btn btn-primary position-absolute bottom-0 end-0">Читать</a>
      </div>
    </div>
    <?php }
    wp_reset_postdata();
  ?>
</section><!-- section8 Наши поэты -->
<a href="" class="btn btn-outline-primary d-block my-4 mx-auto" style="width: 150px;">Все стихи</a>

</main><!-- main end -->



<?php get_footer(); ?>

