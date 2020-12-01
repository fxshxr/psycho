<!DOCTYPE html>
<html lang="ru">
<head>
	<script>
	window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
</script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<meta charset="UTF-8">
		<script src='https://www.google.com/recaptcha/api.js'></script>
<meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
		
		<script>
			if (screen.width < 720)
{
    var mvp = document.getElementById('vp');
    mvp.setAttribute('content','initial-scale=0.1');
}
		</script>
	<title>Порядок вступления в РБО</title>

<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet"> 
</head>
<body>

		<?php 
		include 'vars.php';
		addHeader();
	?>
	
	<main class="main">
		<div class="container">
		
				<h1 class="page__head">Порядок вступления в РБО</h1>
				<p>Членами Русского балинтовского общества могут быть психотерапевты, психологи и другие специалисты помогающих профессий, участвующие в совместном достижении целей, предусмотренных Уставом РБО.</p>
				<p>Русское  балинтовское общество открыто для вступления новых членов из любых регионов страны. </p>
				<p>Для вступления в члены РБО необходимо представить письменное заявление на имя Председателя Правления Ивановой Е.Ю <a href="mailto:ivey2007@yandex.ru">
					ivey2007@yandex.ru</a> 
 и заполненную анкету.
</p>
			</div>
		<div class="anketa">
			<div class="container">
			<h1 class="anketa__page__head">Анкета для вступления в члены РБО</h1>
			<form class="anketa__form">
				<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Анкета для вступления в члены РБО">
		<input type="hidden" name="admin_email" value="balint.move@yandex.ru">
		<input type="hidden" name="form_subject" value="Заявка с сайта balint-movement.ru">
		<!-- END Hidden Required Fields -->
				<input type="text" placeholder="Фамилия" name="Фамилия" required><br>

			<input type="text" placeholder="Имя" name="Имя" required><br>
			<input type="text" placeholder="Отчество" name="Отчество" required><br>
				<input type="text" placeholder="Специальность\стаж работы по специальности" name="Специальность\стаж" required><br>
				<input type="text" placeholder="Домашний адрес" name="Адрес" required><br>
				<input type="tel" placeholder="Контактный телефон" maxlength="14" required name="Телефон" ><br>
				<input type="email" placeholder="Электронная почта" required name="email"><br>
				<br>
		<div class="g-recaptcha"  data-sitekey="6LcEyewZAAAAAPJMfUi4ZG6NdShtESA6KAZePxfY"></div>
		<br>
		<button class="button">Отправить</button>

			 	 
			 	 
			</form>

			</div>
		</div>
	</main>
	<?php 
		
		addFooter();
	?>

	

	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>
</body>
</html>