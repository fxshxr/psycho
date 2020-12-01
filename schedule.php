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
				<h1 class="head_lead">Календарь Событий
				</h1>
<?php 
			
	require_once "functions.php";

	$link=mysqli_connect($host,$user,$password,$database)
		or die("error" . mysqli_error($link));


		$query = " SELECT * FROM news ORDER BY date DESC;" ;

		

		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		while ($row = mysqli_fetch_assoc($result)){
			
			echo "<div class='news__card'><h1 class='news__card__title'>"; 
			echo $row ['title'] ."</h1>";
			if ($row ['path'] !='') {
				echo "<img class='cardimg' src='uploads/". $row ['path'] . "'> <br>";
			} 
			
			
			
			$new_text = preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<a href="$1://$2">$1://$2</a>$3', $row ['par'] );
			

			echo nl2br("<p class='news_art'>" . $new_text ."</p>");

			echo "<p> <b><i> Добавлено Администатором " .$row ['date'] ." </b></i></p>" ;
			echo "</div>";
			
		}
		
	
?>
	

		</div>

	</main>
	<?php 
		
		addFooter();
	?>

</body>
</html>