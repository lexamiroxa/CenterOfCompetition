<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("КОНТАКТЫ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/contact.css');
?>

<nav aria-label="breadcrumb">        <!--main page and active -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			 <a href="../index.html">Главная</a> <!-- main page -->
		   </li> 
		  <li class="breadcrumb-item active" aria-current="page">Контакты</li>  <!-- active page -->
		</ol>
	</nav>


	<div class="contact"> 	<!-- our contact-->
		<div class="about-us-preview">
			<h1>Контакты</h1> 	<!-- name of page-->
		</div>
		<div class="contact_text"> 	<!-- description page-->
			<span>
				<strong>Центр компетенций повышения производительности труда, конкурентоспособности и цифровизации производства Кубанского ГАУ</strong> 
			</span>
		</div>

		<div class="contact_info"> 	<!-- adress-->
			<span>
				<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Address.svg" alt="" width="32px" height="32px"> 	<!-- adress-->
				350044, г. Краснодар, ул. Калинина, 13 
			</span>
			<span> 	<!-- phone-->
				<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Call.svg" alt="" width="32px" height="32px">
				<a href="tel:+79189697484" style="color: #000000; padding-right: 5px;">+7 (918) 969-74-84 </a> 	<!-- phone-->
				<a href="tel:+78612215491" style="color: #000000;">+7 (861) 221-54-91 </a> 	<!-- phone-->
			</span>
			<span> 	<!-- mail-->
				<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Email.svg" alt="" width="32px" height="32px">
				<a href="mailto:Turlij.s@kubsau.ru" style="color: #000000;">Turlij.s@kubsau.ru </a>  	<!-- mail-->
			</span>
		</div>

		<div class="map">  	<!-- integrate google map-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1369.354308062903!2d38.92641852605444!3d45.04605738504942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04f3eaa3a8341%3A0x9b1013ebcd9aa156!2z0JrRg9Cx0JPQkNCjLCDRhNCw0LrRg9C70YzRgtC10YIg0LfQvtC-0YLQtdGF0L3QvtC70L7Qs9C40Lgg0Lgg0LzQtdC90LXQtNC20LzQtdC90YLQsCwg0JrRgNCw0YHQvdC-0LTQsNGA!5e0!3m2!1sru!2sru!4v1613660277657!5m2!1sru!2sru" ъ
			width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>