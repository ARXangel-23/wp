<!DOCTYPE html>
<html <?php language_attributes();?> prefix="og: https://ogp.me/ns# article: http://ogp.me/ns/article# ">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="b18a9582d1655a29" />
	<meta name="description" content="<?php echo get_the_excerpt(); ?>"/>
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:description" content="Подробнее читайте на сайте" />
	<meta property="og:url" content="<?php the_permalink()?>" />
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <?php if(has_post_thumbnail()) { ?>
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="<?php the_post_thumbnail_url( 'full' ); ?>">
  <meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>"/>
	<meta property="vk:image" content="<?php the_post_thumbnail_url( 'full' ); ?>"/>
  <?php } else {?>
  <meta name="twitter:card" content="summary">
  <meta name="twitter:image" content="http://avangard-93.ru/wp-content/uploads/2022/12/logo300.png">
  <meta property="og:image" content="http://avangard-93.ru/wp-content/uploads/2022/12/logo300.png"/>
	<meta property="og:image:width" content="150"/>
	<meta property="og:image:height" content="150"/>
	<meta property="vk:image" content="http://avangard-93.ru/wp-content/uploads/2022/12/logoVK.png"/>
	<meta property="vk:image:width" content="150"/>
	<meta property="vk:image:height" content="150"/>
  <?php } ?>
	<meta name="twitter:title" content="<?php the_title(); ?>">
	<meta name="twitter:description" content="Подробнее читайте на сайте">

<meta property="article:published_time" content="<?php the_time('c') ?>" />
<meta property="article:modified_time" content="<?php the_modified_date('c') ?>" />
	
<!-- * -->
	<meta name="zen-verification" content="NovjuElPnakNzk3mLBJwzUdHa4ztkpybi3RZRe8X3ugmP41YBtgxPNzM8uaf6Fls" />
	<script type="text/javascript" src="https://cdn.connect.mail.ru/js/loader.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<?php wp_head(); ?>
<script>new WOW().init();</script>
</head>

<body id="page-<?php the_ID() ?>" <?php body_class('scrollspy-example bg-light p-3 rounded-2') ?> data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="" tabindex="0">
<header id="header" class="" style="">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light d-print-none p-0 m-0" style="">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="logoNav"><img src="https://avangard-93.ru/wp-content/uploads/2022/09/logo2.png" class="img-fluid" style="width: 40px;"></span></a>
      <!-- <nav id="navbar-example2" class="navbar bg-light p-0 m-0" style="width:60%;">
        <ul class="nav-pills" style="white-space: nowrap; overflow-x: auto;">
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section3">Твои люди, район!</a></li>
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section4">Правопорядок</a></li>
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section5">Культура</a></li>
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section6">Спорт</a></li>
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section7">Образование</a></li>
          <li class="nav-item d-inline-block"><a class="nav-link" href="#section8">Наши поэты</a></li>
        </ul>
      </nav>  -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"></a></li>
          <li class="nav-item"><a class="nav-link icon-link" href="#"></a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Редакция</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="http://avangard-93.ru/как-все-начиналось/">О нас</a></li>
              <li><a class="dropdown-item" href="https://avangard-93.ru/documents/">Документы</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="http://avangard-93.ru/контакты/">Контакты</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Будь в курсе!</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="https://avangard-93.ru/raspbus/">Расписание автобусов</a></li>
                <li class="disabled"><a class="dropdown-item disabled" href="https://avangard-93.ru/phonedirectory/">Телефонный справочник</a></li>
              </ul>
          </li>
        </ul>
        <ul class="socMulti30 my-2">
          <li><a href="http://vk.com/avangard_23/" title="Мы в ВКонтакте" target="_blank" class="spriteVK30"></a></li>
          <li><a href="https://ok.ru/gazetakryl/" title="Мы в Одноклассниках" target="_blank" class="spriteOK30"></a></li>
          <li><a href="https://dzen.ru/avangard_93" title="Мы в Дзен" target="_blank" class="spriteZ30"></a></li>
          <li><a href="https://t.me/avangard93/" title="Мы в Telegram" target="_blank" class="spriteT30"></a></li>
        </ul><!--/socLink-->
        <?php get_search_form(); ?>
      </div>
    </div>
  </nav> <!-- -->




  <div id="headLogo" class="container my-5">
  <div class="row ">
  <div class="col-12 col-lg-8"><?php the_custom_logo( $blog_id ); ?></div>
  <div class="col-12 col-sm-6 col-lg-2 d-print-none">
  <img src="http://avangard-93.ru/wp-content/uploads/2024/06/logo_pochta.png" alt="Почта России" title="Почта России" class="img-fluid" style="width: 50%; height: auto;margin: 0 auto; display: block;">
  <a class="btn btn-primary" href="https://podpiska.pochta.ru/press/%D0%9F5423" role="button" style="margin: 10px auto; display: block;">Онлайн подписка</a>
  </div>
  <div class="col-12 col-sm-6 col-lg-2 d-print-none"></div>
  </div>
  </div>
</header>

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs" class="border-bottom shadow-sm p-3 mb-5 bg-body rounded">','</p>' );
}
?>

<!-- HEADER -->	