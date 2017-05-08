

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TheHealing - новая технология саморазвититя </title>
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/main_page.css" type="text/css" charset="utf-8">
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
					<h2 class="heading">Новости</h2>
					<div style="clear: both"><br></div>
					<!-- Статья-->
					
					<?php
					for ($i = 0; $i < 6; $i++)
						echo '
					<div class="article">	
						<img src="http://www.bourgeon.co.uk/wp-content/uploads/2014/11/Ocean.jpg" alt="test" title="test">
						<span>ThetaHealing — новая технология саморазвития, основателем которой является Вианна Стайбл, перенёсшая рак.</span>
					</div>
							';
							?>
					
					
					
					<a href="" title="Посмотреть больше статей">
						<div class="btn">
					Посмотреть больше
						</div>
					</a>
					
					</div>
				</div>
				<?php
					require_once "blocks/aside.php";
				?>
					<div style="clear: both"><br></div>
					
					<div id="subscribe">
						<span>Подпишитесь чтобы быть в курсе всех новостей</span>
						<div style="clear: both"><br></div>
						<!--Vk Widget-->
						
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?145"></script>
							<div id="vk_groups"></div>
							<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {mode: 3, width: "500"}, 23473641);
							</script>
							<div style="clear: both"><br></div>
						
						<!--Facebook-->
						
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						
							<!--Twitter-->
							<a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/realDonaldTrump">Tweets by realDonaldTrump</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							
					</div>
					
					<div id="sub_to_project">
						<span class="heading">Подписаться на проект</span>
						<div style="clear: both"><br></div>
						<p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект</p>
						<a href="" title="Посмотреть информацию о подписке на проект">
						<div class="btn">
					Узнать детальнее о подписке
						</div>
					</a>
					<div style="clear: both"><br></div>
					<h2 class="heading">Создание онлайн магазина</h2>
					<div style="clear: both"><br></div>
					<img src="http://www.tetahealing.info/content/image/thetahealerlogo.jpg" alt="test" title="test">
					</div>
					<div style="clear: both"><br></div>
					<div id="web_sites">
						<span>Хотите создать сайт?</span>
							<a href="" title="Закать сайт">
						<div class="btn">
							Заказать сайт
						</div>
					</a>
					</div>
					
			</div>
	<?php
		require_once "blocks/footer.php";
	?>
	</div>
	<?php
		require_once "blocks/JS_scripts.php";
	?>
</body>
</html>

