<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php 
        Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/main.css');
        Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/slider-courses.css');
        Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/bootstrap5/bootstrap.css');
        Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/bootstrap5/bootstrap.js');
        Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/main.js');
        Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/jquery.js');
        Asset::getInstance()->addString('<meta charset="UTF-8">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">');
        Asset::getInstance()->addString('<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">');
        Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>');
        Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>');
    ?>

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<header>
	<div class="header-logo">
		<div class="display-table-cell display-table-cell-logo">
			<img src="<?=SITE_TEMPLATE_PATH?>/material/images/KubSAU_Competence_Center_FawIcon.png" alt="">
		</div>
		<div class="borderright display-table-cell"></div>
		<div class="display-table-cell">
			<p class="header-text">
				Центр компетенций повышения производительности труда, 
				конкурентоспособности и цифровизации производства Кубанского ГАУ
			</p>
		</div>
	</div>
</header>
<div class="header-line"></div>
<div class="hamburger-menu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid hamburger-text">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mb-2 mb-lg-0 hamburger-slide">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">ГЛАВНАЯ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_about_us/about_us.html">О ЦЕНТРЕ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_courses/courses.html">КУРСЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_reviews/reviews.html">ОТЗЫВЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_news/news.html">НОВОСТИ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_ads/ads.html">ОБЪЯВЛЕНИЯ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_partner/partner.html">ПАРТНЕРЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_client/client.html">КЛИЕНТЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="pages_contact/contact.html">КОНТАКТЫ</a>
					</li>
				</ul>
			</div>
		</div>
  	</nav>
</div>