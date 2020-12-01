<?php 


 if (isset($_POST['title']) && isset($_POST['par']) && isset($_POST['section']) && isset($_POST['submit']) and $_FILES ){

	require_once "functions.php";

	$link=mysqli_connect($host,$user,$password,$database)
		or die("error" . mysqli_error($link));

		$lastupdated = date("Y-m-d H:i:s");
		$title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
		$par = htmlentities(mysqli_real_escape_string($link, $_POST['par']));
		$section = htmlentities(mysqli_real_escape_string($link, $_POST['section']));
		move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
   		$path = $_FILES['file']['name'];

	if ( $section == 1){
	$query = " INSERT INTO news VALUES ('$title','$par','$lastupdated','$path')"  ;
	} else if ($section == 2) {
		$query = " TRUNCATE news "  ;
	}
	else if ($section == 3) {
		$query = " DELETE FROM
    news
ORDER BY
    date DESC
LIMIT 1"  ;
	}
	
	
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	if(!$result)
	{
	    echo "Выполнение запроса прошло успешно";
}



	mysqli_close($link);

}
?>
<?php

if(isset($_POST['submit']) and $_FILES){
    
    echo "Добавлено успешно!";
} 

?>



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
	<title>Панель Администратора РБО</title>

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
	<div class="container">
		<h1>Панель Администратора РБО <a href="index.php" class="exit" id="1rrr" >Выход</a>
			<a href="schedule.php" class="exit" id="2rrr" >К новостям</a></h1>
			
			<form action="" method="post" id="login">

				<label for="">Логин
					<input type="" required name="login">
				</label>
				<br>
				<label for="">Пароль
					<input type="Password" required name="pass">
				</label>
				<br>
				<input type="submit" value="Войти" class="button">
			</form>
			<?php if ($_POST['pass'] == '' and $_POST['login'] == '') {
				echo "<p></p>";
				# code...
			}
			else{
				echo "<p class='error' id='login1'>Неверный пароль</p>";
			} if ($_POST['pass'] == 'balint11' and $_POST['login'] == 'admin'){
				echo '<script>document.getElementById("login1" ).style.display = "none"; </script>';
			}
			


			?>
			

<?php 
			if ($_POST['pass'] == 'balint11' and $_POST['login'] == 'admin' ) {
				echo '

				<p>
					<script>document.getElementById("login" ).style.display = "none"; </script>
					<script>document.getElementById("1rrr" ).style.display = "inline-block"; </script>
					<script>document.getElementById("2rrr" ).style.display = "inline-block"; </script>
					<a href="/textolite">Редактор верстки и текстов</a>
					<p>Пароль редактора <span class="hidden">balint11</span></p>
				</p>

	
		<h1> Добавить новость в Календарь событий </h1>
		

	<form action="" method="post" enctype="multipart/form-data">
		<label for="">Выбeрите Функцию
			<select name="section" id="" required>
				<option value="1">Календарь Новостей</option>
				<option value="2">Удалить все новости</option>
				<option value="2">Удалить последнюю новость</option>
			</select>
		</label>
		<br>
	<label for="">Загрузить Изображение<input  type="file" name="file"></label>
	<br>
		<label for="">Заголовок: <input type="text" name="title" required></label>
		<br>
		<p>Текст Новости:</p>
			<textarea required  id="ta" placeholder="Введите текст новости" cols="30" rows="10" name="par" ></textarea>
		</label>

		<br>

		<input type="submit" name="submit" value="Выполнить!" class="button margin">
	</form>

	









	';



			}

			
		 ?>

		
	</div>

</body>