
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Заказ рекламы / TheHealing </title>
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
	<meta name="description" content="Информационно развлекательный портал для программистов! Обучающие курсы, новости в сфере IT и многое другое.">
	<meta name="keywords" content="itProger, it, курсы, новсти, уроки">
	<meta name="vieport" content="width=device-width, initial-scale=1">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/eye-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
		<div id="wrapper">
		<div id="content">
			<?php
				require_once "blocks/header.php";
			?>
				
				<div id="main">
						<div id="news">
					<h2 class="heading">Реклама</h2>
					<div style="clear: both"><br></div>
					<div class="blocks">
					ЗДесь будет висеть ваша реклама
						<a><img src="img/advert.png" title="Advert" alt="Advert"></a>
					</div>
					
					</div>
				</div>
				<aside>
					<div id="courses">
					<h2 class="heading">Видеокурсы</h2>
					<div style="clear: both"><br></div>
						<!-- Курс-->
					
					<?php
					for ($i = 0; $i < 4; $i++)
						echo '
					<div class="course">	
						<img src="https://static1.squarespace.com/static/5578a81ce4b010f38d58899f/t/5747648560b5e9b8141bd9fd/1464296601701/" alt="test" title="test">
						Создание <em>IOS</em> игры на UNITY
						<span>25 уроков</span>
					</div>
					<div style="clear: both"><br></div>
							';
							?>
							<a href="" title="Посмотреть все видео курсы">
						<div class="btn">
					Все видео курсы
						</div>
					</a>
					
					</div>
						<div id="one_course">
							<h2 class="heading">Как сделать?</h2>
							<div style="clear: both"><br></div>
							<img src="https://static1.squarespace.com/static/5578a81ce4b010f38d58899f/t/5747648560b5e9b8141bd9fd/1464296601701/" alt="test" title="test">
						</div>
				</aside>
					<div style="clear: both"><br></div>
					
				
	<?php
				require_once "blocks/footer.php";
			?>
	</div>
	<?php
				require_once "blocks/JS_scripts.php";
			?>
</body>
</html>
