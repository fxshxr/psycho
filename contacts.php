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
	<meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
		
		<script>
			if (screen.width < 720)
{
    var mvp = document.getElementById('vp');
    mvp.setAttribute('content','initial-scale=0.1');
}
		</script>
	<title>Контакты РБО</title>
	
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet"> 
	<meta name="yandex-verification" content="f789db3fc28795e1" />
</head>
<body>
		<?php 
		include 'vars.php';
		addHeader();
	?>
	
	<main class="main">
		<div class="container">
		
				<h1 class="page__head">Контакты</h1>
				<p>
					Тишкова Татьяна Олеговна
					<br>
					<p>Член Комитета Балинтовского движения                                                                                        Общероссийской Профессиональной Психотерапевтической Лиги                                                                                                                                   </p>
					Телефон:
					<a href="tel:+7(985)211-54-14"> +7(985)211-54-14</a><br>
					E-mail:
					<a href="mailto:aloxa50@yandex.ru">aloxa50@yandex.ru</a>
				</p>
				<p>
					
				</p>
			</div>
		<div class="anketa">
			<div class="container">
			<h1 class="anketa__page__head">Обратная Связь</h1>

			
			<form class="anketa__form">

		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Форма обратной свзяи РБО">
		<input type="hidden" name="admin_email" value="balint.move@yandex.ru">
		<input type="hidden" name="form_subject" value="Заявка с сайта balint-movement.ru">
		<!-- END Hidden Required Fields -->

		<input type="text" name="ФИО" placeholder="ФИО" required><br>
		<input type="text" name="E-mail" placeholder="Электронная Почта" required><br>
		
		<textarea name="Сообщение" placeholder="Ваше Сообщение" id="" cols="30" rows="10"></textarea><br>
		<br>
		<div class="g-recaptcha"  data-sitekey="6LcEyewZAAAAAPJMfUi4ZG6NdShtESA6KAZePxfY"></div>
		<br>
		<button class="button">Отправить</button>

	</form>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>
		

							

			</div>
		</div>
	</main>
		<?php 
		
		addFooter();
	?>
</body>
</html>