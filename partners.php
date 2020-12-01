<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
		
		<script>
			if (screen.width < 720)
{
    var mvp = document.getElementById('vp');
    mvp.setAttribute('content','initial-scale=0.1');
}
		</script>
	<title>Балинтовское Движение в России</title>
	
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
	
	
	
	<main class="main__partners">
		<div class="container">
			
			<h1 class="partners__head">
				Наши Партнеры
			</h1>
			<div class="partners">
					<div class="partner__card">
					<a href="http://www.balint.ru">
						<img src="images/ba.png" class="baimg" alt="">
						<p>Балинтовская Ассоциация (Россия)</p>
					</a>
					</div>
					<div class="partner__card">
					<a href="http://www.oppl.ru">
						<img src="images/oppl.png" class="opplimg" alt="">
						<p>Профессиональная психотерапевтическая лига</p>					

					</a>
					</div>
					<div class="partner__card">
					<a href="http://www.inpsycho.ru">
						<img src="images/mip.png" class="mipimg" alt="">
						<p>Московский институт психоанализа</p>
					</a>
					</div>
				</div>
			</div>
			
		</div>

	</main>
	<?php 
		
		addFooter();
	?>
</body>
</html>