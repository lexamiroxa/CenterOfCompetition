<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ОБЪЯВЛЕНИЯ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/ads.css');
?>

	<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
		  <li class="breadcrumb-item">
			  <a href="../index.html">Главная</a>   <!-- main page -->
			</li>
		  <li class="breadcrumb-item active" aria-current="page">Объявления</li>   <!-- active page -->
		</ol>
	</nav>


	<div class="ads-content">
		<div class="about-us-preview">
			<h1>Объявления</h1>   <!-- title of page -->
			<div class="about-us-underline"></div>
		</div>
										<!-- card of news with information -->
		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">  <!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">			<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href="">Франция намерена исследовать, почему героям были возданы соответствующие почести</a> 		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'"><!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href=""> Внезапно, обереги никого не защитили</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href=""> Только младая поросль матереет</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href=""> Современная методология разработки станет частью наших традиций</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href=""> Мелочь, а приятно: сознание наших соотечественников не замутнено пропагандой</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href=""> Мелочь, а приятно: объемы выросли</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href="">Как бы то ни было, сложившаяся структура организации показала себя во всей красе</a>		<!-- text in ads -->
			</span>
		</div>

		<hr>

		<div class="ads-content-img"  onClick="window.location.href='news-info-page.html'">	<!-- card of news with information -->
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Calendar.svg" alt="" width="85px" height="85px">		<!-- calendar svg -->
			<span class="img-text-date">1 <br> янв</span> 		<!-- date of ads -->
			<span class="ads-content-img-text">
				<a href="">Дурное дело нехитрое: постоянный количественный рост станет частью наших традиций</a>		<!-- text in ads -->
			</span>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>