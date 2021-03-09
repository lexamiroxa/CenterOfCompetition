<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПАРТНЕРЫ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/partner.css');
?>

<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			 <a href="../index.html">Главная</a> <!-- main page -->
		   </li> 
		  <li class="breadcrumb-item active" aria-current="page">Наши партнеры</li>  <!-- active page -->
		</ol>
	</nav>

	<div class="partner-content"> 	<!-- page about our partner -->


		<div class="about-us-preview"> 	<!-- name page about our partner -->
			<h1>Наши партнеры</h1> 	<!-- text preview page -->
			<div class="about-us-underline"></div>
		</div>


		<div class="partner-block">  	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Abynskyy_Maslozavod.webp" alt="" class="" width="50%"> 	<!-- image partner company -->
			</figure>	
			<span class="partner-text">Маслозавод «Абинский»</span> 	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Afipskiy_Khlebokombinat.png" alt="" class="" width="60%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">ООО « Афипский хлебокомбинат».</span>	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/AfoneX.png" alt="" class="" width="100%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">AfoneX Международная биржа идей</span>	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Agrosistema.png" alt="" class="" width="80%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">ООО «Агросистема»</span>	<!-- text about our partner company-->
		</div>
		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/KKM.png" alt="" class="" width="50%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">ККМ</span>	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Kondyterskyy_kombynat_kuban.png" alt="" class="" width="60%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">Кондитерский комбинат «Кубань»</span>	<!-- text about our partner company-->
		</div>
		
		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Minenergo Ministerstvo.jpg.png" alt="" class="" width="50%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">Министерство Энергетики Российской Федерации</span>	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-block"> 	<!-- block with info about client -->
			<figure>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/images/partner/Syngenta.png" alt="" class="" width="60%">	<!-- image partner company -->
			</figure>	
			<span class="partner-text">ООО «Сингента»</span>	<!-- text about our partner company-->
		</div>

		<hr>

		<div class="partner-button"> 	<!-- bottom to show more partner -->
			<button type="button" class="btn btn-outline-success"> Еще  </button>
		</div>


	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>