<?php

function addHeader()
{
    
    echo '<header class="header">
		<div class="container">
			<a href="index.php" class="logo"><img src="images/logo.png" class="logo" alt=""></a>
			<p class="header__title">Балинтовское Движение В России</p>
		</div>
		<nav class="menu">
		<div class="container">
			<ul class="menu__list">
				<li class="menu__list__link"><a href="groups.php">БАЛИНТОВСКИЕ ГРУППЫ</a>
					<ul class="submenu">
						<li><a href="goals.php">Цели и задачи</a></li>
						<li><a href="workadv.php">Особенности работы</a></li>
						<li><a href="regional.php">Региональные отделения</a></li>
					</ul>
				</li>
				<li class="menu__list__link"><a href="leader.php">ПОДГОТОВКА ЛИДЕРОВ</a> 
					<ul class="submenu">
						<li><a href="leader1.php">Положение о лидере БГ</a></li>
						
						<li><a href="certleaders.php">Сертифицированные лидеры БГ</a></li>
						<li><a href="supervisions.php">Cупервизии</a></li>
					</ul>
				</li>
				<li class="menu__list__link"><a href="international.php">МЕЖДУНАРОДНЫЕ ПРОГРАММЫ</a>
					<ul class="submenu">
						<li><a href="inttable.php">Международный круглый стол</a></li>
						<li><a href="baikal.php">Балинтовский симпозиум на Байкале</a></li>
					</ul>
				</li>
				<li class="menu__list__link"><a href="schedule.php">КАЛЕНДАРЬ СОБЫТИЙ</a></li>
				<li class="menu__list__link"><a href="library.php">БИБЛИОТЕКА</a></li>
			</ul>
		</div>
	</nav>
	</header>';
}

function addFooter()
{
    
    echo '<footer class="footer">
		<div class="container">
			<ul class="footer__list">	
					<li> <a href="rulers.php">Правление</a></li>
					<li> <a href="ethics.php">Этический кодекс</a></li>
					<li> <a href="partners.php">Партнеры</a></li>
					<li> <a href="library.php">Библиотека</a></li>
					<li> <a href="regdocs.php">Регистрационные документы</a></li>
					<li> <a href="contacts.php">Контакты</a></li>
			</ul>

			<div class="footer__row"></div>


			<p class="copy">2020 © Русское Балинтовское Общество. Все права защищены.
			</p>
			<a class="log" href="admin.php">Вход для администратора</a>

		</div>
	</footer>';

}
?>