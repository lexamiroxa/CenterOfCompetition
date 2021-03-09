<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("НОВОСТИ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/news.css');
?>

<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			 <a href="../index.html">Главная</a> <!-- main page -->
		   </li> 
		  <li class="breadcrumb-item active" aria-current="page">Новости</li>  <!-- active page -->
		</ol>
	</nav>

	<div class="page-news">

		<div class="about-us-preview"> 	<!-- name page about our partner -->
			<h1>Новости</h1> 	<!-- text preview page -->
			<div class="about-us-underline"></div>
		</div>

		<div class="page-menu-block"  onClick="window.location.href='news-info-page.html'">  <!-- block for img and description -->
			<div class="page-menu-block-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/Slider_Image_01.jpg" alt=""> <!-- img -->
			</div>
			<div class="page-menu-block-text">
				<span class="page-menu-block-text-tittle">	<!-- tittle of description -->
					Новости на две строки непонятного никому текста, только я его понимаю, больше никто его не поймёт понимаю

					<br>
				</span>
				<span class="page-menu-block-text-date">	<!-- date of description -->
					01.01.2021
					<br>
				</span>
				<span class="page-menu-block-text-description">	<!-- text of news -->
					Равным образом, курс на социально-ориентированный национальный проект однозначно фиксирует необходимость стандартных подходов. 
					Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта  целевой аудитории является четким доказательством простого факта 
					<br>
				</span>
			</div>
		</div>

		<div class="page-menu-block"  onClick="window.location.href='news-info-page.html'">  <!-- block for img and description -->
			<div class="page-menu-block-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/Slider_Image_01.jpg" alt=""> <!-- img -->
			</div>
			<div class="page-menu-block-text">
				<span class="page-menu-block-text-tittle">	<!-- tittle of description -->
					Новости на две строки непонятного никому текста, только я его понимаю, больше никто его не поймёт понимаю

					<br>
				</span>
				<span class="page-menu-block-text-date">	<!-- date of description -->
					01.01.2021
					<br>
				</span>
				<span class="page-menu-block-text-description">	<!-- text of news -->
					Равным образом, курс на социально-ориентированный национальный проект однозначно фиксирует необходимость стандартных подходов. 
					Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта  целевой аудитории является четким доказательством простого факта 
					<br>
				</span>
			</div>
		</div>

		<div class="page-menu-block"  onClick="window.location.href='news-info-page.html'">  <!-- block for img and description -->
			<div class="page-menu-block-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/Slider_Image_01.jpg" alt=""> <!-- img -->
			</div>
			<div class="page-menu-block-text">
				<span class="page-menu-block-text-tittle">	<!-- tittle of description -->
					Новости на две строки непонятного никому текста, только я его понимаю, больше никто его не поймёт понимаю

					<br>
				</span>
				<span class="page-menu-block-text-date">	<!-- date of description -->
					01.01.2021
					<br>
				</span>
				<span class="page-menu-block-text-description">	<!-- text of news -->
					Равным образом, курс на социально-ориентированный национальный проект однозначно фиксирует необходимость стандартных подходов. 
					Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта  целевой аудитории является четким доказательством простого факта 
					<br>
				</span>
			</div>
		</div>

		

		<div class="news-button"> 	<!-- bottom to show more partner -->
			<button type="button" class="btn btn-outline-success"> Еще  </button>
		</div>


	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>