<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="hamburger-menu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid hamburger-text">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto mb-2 mb-lg-0 hamburger-slide">

					<?
					foreach($arResult as $arItem):
						if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
							continue;
					?>
						<?if($arItem["SELECTED"]):?>
							<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
						<?else:?>
							<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
						<?endif?>
						
					<?endforeach?>

				</ul>
			</div>
		</div>
  	</nav>
</div>
<?endif?>