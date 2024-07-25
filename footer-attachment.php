<footer id="footer" class="text-white text-center mt-5 d-print-none">
<div class="container-fluid p-3" style="background: rgba(0,0,0,0.5);">
	
<div class="row border-top pt-5">
<div class="col-1"><span class="rounded-circle bg-light p-3 fs-4 text-dark">12+</span></div>
<div class="col-11">
<span>© <?php echo wp_date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span><br>
<span>Сетевое издание (сайт) "Сайт газеты "Авангард" зарегистрирован в Федеральной службе по надзору в сфере связи, информациионных технологий и массовых коммуникаций (Роскомнадзор). <br> Регистрационный номер СМИ <a href="https://avangard-93.ru/wp-content/uploads/2022/07/certificateSMI-scaled.jpg" target="_blank" style="color: #fff;"> Эл № ФС77-60222 от 17 декабря 2017.</a></span><br>
<span>Учредитель (соучредители): Общество с ограниченной ответственностью «Редакция газеты «Авангард».</span> 
</div>
</div><!-- /row -->
	

</div><!-- /container -->

</footer>

<?php wp_footer(); ?>

<!-- После подключения jQuery, Popper и Bootstrap JS -->
<script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
	
</body>
</html>