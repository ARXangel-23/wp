<footer id="footer" class="text-white text-center mt-5 d-print-none">
<div class="container p-3" style="background: rgba(0,0,0,0.5);">
<div class="row my-5">
<div class="col-12 col-md-3 border-end">
	
<p class="text-start fs-4">Написать в редакцию</p>
<div class="form-group my-3 d-grid gap-2 d-md-block">
	<a href="mailto:avangard-23@mail.ru?subject=Обращение с сайта <?php the_time('j F Y в H:i'); ?>&body=Здравствуйте" id="smsEmail" class="btn btn-outline-light" title="avangard-23@mail.ru">На почту:</a>
	<a href="https://t.me/avangard_23" id="smsTG" class="btn btn-outline-light" >Телеграм</a>
</div>
	
<p class="text-start fs-4">Контакты</p>
	  <div class="form-group my-1">
		<label for="telRed">Трофименко Светлана Михайловна</label>
		<a href="tel:88616131776" id="telRed" class="col-12 btn btn-outline-light" >8(86161)31-7-76</a> 
		<small id="" class="form-text text-muted">Главный редактор</small>
	  </div>
	  <div class="form-group my-1">
		<label for="telFin">Медовник Галина Алексеевна</label>
		<a href="tel:88616131151" id="telFin" class="col-12 btn btn-outline-light" >8(86161)31-1-51</a> 
		<small id="" class="form-text text-muted">Главный бухгалтер</small>
	  </div>
</div>	
<div class="col-12 col-md-6"><span></span></div>	
<div class="col-12 col-md-3 border-start">
<p class="text-start fs-4">Рубрики</p>
<?php
$args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 1,
	'hide_empty'         => 1,
	'use_desc_for_title' => 0,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => '',
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => '',
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);
echo '<ul class="listCategory">';
	wp_list_categories( $args );
echo '</ul>';
?>	
</div>	
</div><!-- /row -->	
	
<div class="row border-top pt-5">
<div class="col-1"><span class="rounded-circle bg-light p-3 fs-4 text-dark">12+</span></div>
<div class="col-11">
<span>© <?php echo wp_date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span><br>
<span>Сетевое издание (сайт) "Сайт газеты "Авангард" зарегистрирован в Федеральной службе по надзору в сфере связи, информациионных технологий и массовых коммуникаций (Роскомнадзор). <br> Регистрационный номер СМИ <a href="https://avangard-93.ru/wp-content/uploads/2022/07/certificateSMI-scaled.jpg" target="_blank" style="color: #fff;"> Эл № ФС77-60222 от 17 декабря 2017.</a></span><br>
<span>Учредитель (соучредители): Общество с ограниченной ответственностью «Редакция газеты «Авангард».</span> 
</div>
</div><!-- /row -->
	
<div class="row my-5">
<div class="col-12 border-top">
<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=27142499&amp;from=informer" target="_blank" rel="nofollow" style="text-align: center; display: block; margin: 10px auto 0;"><img src="https://informer.yandex.ru/informer/27142499/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="27142499" data-lang="ru" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(27142499, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/27142499" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->	
</div><!-- /row -->
	
</div><!-- /container -->

</footer>

<?php wp_footer('attachment'); ?>

<!-- После подключения jQuery, Popper и Bootstrap JS -->
<script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
	
</body>
</html>