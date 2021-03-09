<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КЛИЕНТЫ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/client.css');
?>

<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
		 	<li class="breadcrumb-item">
			  <a href="../index.html">Главная</a> <!-- main page -->
			</li> 
		  <li class="breadcrumb-item active" aria-current="page">Наши клиенты</li>  <!-- active page -->
		</ol>
	</nav>

	<div class="partner-content">  			<!-- content page -->

		<div class="about-us-preview">
			<h1>Наши клиенты</h1> 			<!-- name of page -->
			<div class="about-us-underline"></div>
		</div>


		<div class="partner-block">  			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Abynskyy_Maslozavod.webp" alt="" class="" width="50%"> 			<!-- image partner -->
			</figure>	
			<span class="partner-text">Маслозавод «Абинский»</span> 			<!-- description image -->
		</div>

		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Afipskiy_Khlebokombinat.png" alt="" class="" width="60%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">ООО « Афипский хлебокомбинат».</span>	<!-- description image -->
		</div>

		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/AfoneX.png" alt="" class="" width="100%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">AfoneX Международная биржа идей</span>	<!-- description image -->
		</div>

		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Agrosistema.png" alt="" class="" width="80%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">ООО «Агросистема»</span>	<!-- description image -->
		</div>
		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/KKM.png" alt="" class="" width="50%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">ККМ</span>	<!-- description image -->
		</div>

		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Kondyterskyy_kombynat_kuban.png" alt="" class="" width="60%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">Кондитерский комбинат «Кубань»</span>	<!-- description image -->
		</div>
		
		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Minenergo Ministerstvo.jpg.png" alt="" class="" width="50%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">Министерство Энергетики Российской Федерации</span>	<!-- description image -->
		</div>

		<hr>

		<div class="partner-block">			<!-- block wit info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Syngenta.png" alt="" class="" width="60%">			<!-- image partner -->
			</figure>	
			<span class="partner-text">ООО «Сингента»</span>	<!-- description image -->
		</div>

		<hr>

	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>