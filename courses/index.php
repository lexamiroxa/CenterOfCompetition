<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КУРСЫ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/courses.css');
?>

<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			 <a href="../index.html">Главная</a> <!-- main page -->
		   </li> 
		  <li class="breadcrumb-item active" aria-current="page">Курсы</li>  <!-- active page -->
		</ol>
	</nav>

	<div class="page-courses">
		<div class="about-us-preview"> 	<!-- name page about our partner -->
			<h1>Наши курсы</h1> 	<!-- text preview page -->
			<div class="about-us-underline"></div>
		</div>

		<div class="page-courses-block">  <!-- block for img and description -->
			<div class="page-courses-block-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/Slider_Image_01.jpg" alt=""> <!-- img -->
			</div>
			<div class="page-courses-block-text">
				<span class="page-courses-block-text-tittle">	<!-- tittle of description -->
					Наши курсы на 2-е строки непонятного текста и наши курсы на 2-е строки непонятного текста
				<br>
				</span>
				</span>
				<span class="page-courses-block-text-description">	<!-- text of news -->
					Равным образом, курс на социально-ориентированный национальный проект однозначно фиксирует необходимость стандартных подходов.
					 Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: 
					<br>
				</span>
				<div class="courses-price">
					<div class="courses-price-money">
						<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-PriceTag.svg" alt="" width="32px" height="32px">
						<span class="courses-price-text">
							1000000 	&#8381;
						</span>
					</div>
					<div class="courses-price-time">
						<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Clock.svg" alt="" width="32px" height="32px">
						<span class="courses-price-text">
							100 часов
						</span>
					</div>
					<div class="courses-price-button"  onClick="window.location.href='courses-link.html'">
						<button type="button" class="btn btn-outline-success"> Записаться  </button>
					</div>
				</div>
			</div>
		</div>

		<div class="page-courses-block">  <!-- block for img and description -->
			<div class="page-courses-block-img">
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/Slider_Image_01.jpg" alt=""> <!-- img -->
			</div>
			<div class="page-courses-block-text">
				<span class="page-courses-block-text-tittle">	<!-- tittle of description -->
					Наши курсы на 2-е строки непонятного текста и наши курсы на 2-е строки непонятного текста
				<br>
				</span>
				</span>
				<span class="page-courses-block-text-description">	<!-- text of news -->
					Равным образом, курс на социально-ориентированный национальный проект однозначно фиксирует необходимость стандартных подходов.
					 Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: 
					<br>
				</span>
				<div class="courses-price">
					<div class="courses-price-money">
						<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-PriceTag.svg" style="fill:#123456" alt="" width="32px" height="32px">
						<span class="courses-price-text">
							1000000 	&#8381;
						</span>
					</div>
					<div class="courses-price-time">
						<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Clock.svg" style="fill:#123456" alt="" width="32px" height="32px">
						<span class="courses-price-text">
							100 часов
						</span>
					</div>
					<div class="courses-price-button"  onClick="window.location.href='courses-link.html'">
						<button type="button" class="btn btn-outline-success"> Записаться  </button>
					</div>
				</div>
			</div>
		</div>


		<div class="courses-button"> 	<!-- bottom to show more partner -->
			<button type="button" class="btn btn-outline-success"> Еще  </button>
		</div>
	</div>	

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>