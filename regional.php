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
	<title>Региональные отделения РБО</title>
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet"> 

<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body>
	<?php 
		include 'vars.php';
		addHeader();
	?>
	
	<main class="main">
		<div class="container">
			<h1 class="reg__head">Региональные Отделения</h1>
		
		<br>
		<div class="map">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A45dbf7c8ffc1d2b7da503c6cde22d47a9ae91d51c99a38edb5888561bb78ea37&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
		</div>
	

	</main>
<?php 
		
		addFooter();
	?>
</body>
</html>