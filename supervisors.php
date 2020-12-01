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
	<title>Супервизоры РБО</title>
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
				<h1 class="page__head">Руководители-супервизоры РБО</h1>
			
				<ul class="rulers__list">
					<li><b>
						Клепиков Николай Николаевич </b>
					</li>
					<p>Президент РБО, сертифицированный руководитель Русского Балинтовского общества, Польского Балинтовского общества, Германского Балинтовского общества</p>
					<li><b>Тишкова Татьяна Олеговна </b></li>
					<p>Вице-Президент РБО, сертифицированный руководитель Русского Балинтовского общества, Польского Балинтовского общества, Германского Балинтовского общества</p>
					<li><b>Иванова Елена Юрьевна </b></li>
					<p>Председатель правления РБО, сертифицированный руководитель Русского Балинтовского общества, Германского Балинтовского общества</p>
					
					</ul>
				
	</div>
		
	</main>
	<?php 
		
		addFooter();
	?>
</body>
</html>