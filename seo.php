
<?php if ( is_user_logged_in() && current_user_can( 'administrator' ) ) : ?>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Кнопка с data-target
  </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
<section class="row bg-secondary bg-gradient my-5 text-light px-3 d-print-none">
	
<div class="col-12 col-md-6 my-2">
<label for="textarea" class="form-label">SMMPlanner</label>
<textarea id="textarea" rows="12" type="text" class="form-control" onclick="this.select();">
<?php echo get_the_title() . "\n\n"; ?>
<?php echo get_the_excerpt() . "\n\n"; ?>
<?php if( has_post_thumbnail() ) {echo 'На фото: ' . get_the_post_thumbnail_caption() . "\n\n";}?>
<?php echo "Подробнее на сайте: " . get_the_permalink(); ?>
</textarea>
	
<label for="textarea" class="form-label">Markdown</label>
<textarea id="textarea" rows="12" type="text" class="form-control" onclick="this.select();">
<?php echo "**" . get_the_title() . "**\n\n"; ?>
<?php echo get_the_excerpt() . "\n\n"; ?>
<?php if( has_post_thumbnail() ) {echo '**На фото:** ' . get_the_post_thumbnail_caption() . "\n\n";}?>
<?php echo "[Подробнее на сайте:](" . get_the_permalink() . ")"; ?>
</textarea>
<!-- LiveJournal -->	
<?php 
//$imgCaption = str_replace(' ', '%20', get_the_post_thumbnail_caption());
//$imgCaption = rawurlencode(get_the_post_thumbnail_caption());
//$imgCaption3 = urlencode(get_the_post_thumbnail_caption());
$imgCaption3 = urlencode_deep(get_the_post_thumbnail_caption());
	
$imgid = "<img src=" . get_the_post_thumbnail_url() . " alt=". $imgCaption3 ." title=". $imgCaption3 .">";
$str = $imgid . get_the_excerpt() . "<hr><a href=" . get_the_permalink() . '?utm_campaign=LiveJournal%26utm_source=repost%26utm_medium=social' . ">Подробнее на сайте</a>"; 
?>	
<button type="button" class="btn btn-primary" onClick="window.open('http://www.livejournal.com/update.bml?event=<?php echo $str ?>&subject=<?php the_title(); ?>','sharer','toolbar=0,status=0,width=600,height=800');" href="javascript: void(0)">LiveJournal</button>
<!-- LiveJournal end -->	
	
</div>
	
	
<div class="col-6 col-md-3 my-2">
<b>UTM</b>
<form>
<div class="form-group">
<?php
$UTMparams = array(
	"utm_campaign" => array('profileOK', 'groupsOK', 'profileVK', 'groupsVK', 'groupsTelegram', 'LiveJournal', 'Z', 'MyMail', 'RuTube', 'NowApp'),
    "utm_source" => "repost",
    "utm_medium" => "social",
	"utm_term" => get_the_permalink(),
	"utm_content" => get_the_title(),
);

for ($i = 0; $i < count($UTMparams['utm_campaign']); $i++) {
	
$UTMlimk =  get_the_permalink() . '?utm_campaign=' .  $UTMparams['utm_campaign'][$i] . '&utm_source=' . $UTMparams['utm_source'] . '&utm_medium=' . $UTMparams['utm_medium'] . '&utm_term=' . $UTMparams['utm_term'] . '&utm_content=' . str_replace(' ', '%20', get_the_title());
	
echo '<label for="' . $UTMparams['utm_campaign'][$i] .'">' .  $UTMparams['utm_campaign'][$i] . '</label>';
echo '<input type="text" class="form-control mb-2" id="' . $UTMparams['utm_campaign'][$i] . '" aria-describedby="emailHelp"  placeholder="" value="' . $UTMlimk . '" onclick="this.select();">';
//echo '<small id="emailHelp" class="form-text text-primary">' . $UTMparams['utm_campaign'][$i] . '</small>';
}
	
?>

</div>
</form>
</div>
	
<div class="col-6 col-md-3 my-2">
<b>Clck.ru</b>	
<form>
<div class="form-group">	
<?php
	$url = 'https://clck.ru/--';
	$link = get_the_permalink();
	$UTMparams2 = array(
	"utm_campaign" => array('profileOK', 'groupsOK', 'profileVK', 'groupsVK', 'groupsTelegram', 'LiveJournal', 'Z', 'MyMail', 'RuTube', 'NowApp'),
    "utm_source" => "repost",
    "utm_medium" => "social",
	"utm_term" => get_the_permalink(),
	"utm_content" => get_the_title(),
);
//echo '<pre>';

for ($j = 0; $j < count($UTMparams2['utm_campaign']); $j++) {	

$UTMlimkClck =  get_the_permalink() . "?utm_campaign={$UTMparams2['utm_campaign'][$j]}%26utm_source={$UTMparams2['utm_source']}%26utm_medium={$UTMparams2['utm_medium']}%26utm_term={$UTMparams2['utm_term']}%26utm_content=" . str_replace(' ', '%20', get_the_title()); 

	
$response = 'https://clck.ru/--?url=' . $UTMlimkClck;
	
	// Инициализация сеанса cURL
	$ch = curl_init();
	// Установка URL
	curl_setopt($ch, CURLOPT_URL, $response);
	// Установка CURLOPT_RETURNTRANSFER (вернуть ответ в виде строки)
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// Выполнение запроса cURL
	//$output содержит полученную строку
	$output = curl_exec($ch);
	// закрытие сеанса curl для освобождения системных ресурсов
	curl_close($ch);
	//echo '<a href="'.$output.'">'.$UTMparams2['utm_campaign'][$j].'</a>';
	
echo '<label for="' . $UTMparams2['utm_campaign'][$j] .'">' .  $UTMparams2['utm_campaign'][$j] . '</label>';
echo '<input type="text" class="form-control mb-2" id="' . $UTMparams2['utm_campaign'][$j] . '" aria-describedby="emailHelp"  placeholder="" value="' . $output . '" onclick="this.select();">';
//echo '<small id="emailHelp" class="form-text text-primary">' . $UTMparams['utm_campaign'][$i] . '</small>';
}

?>
	</div>
</form>
</div>

</section><!-- /section -->
  </div>
</div>
	

<?php endif; ?>
	
<!-- * * * -->	