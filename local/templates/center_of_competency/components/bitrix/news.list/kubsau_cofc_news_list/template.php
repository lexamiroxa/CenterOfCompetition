<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php foreach($arResult["ITEMS"] as $arItem): ?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
	CIBlock::GetArrayById($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
	CIBlock::GetArrayById($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array
	("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="page-menu-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>" onClick="window.location.href='<?=$arItem['DETAIL_PAGE_URL'];?>'">  <!-- block for img and description -->
			<div class="page-menu-block-img">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""> <!-- img -->
			</div>
			<div class="page-menu-block-text">
				<span class="page-menu-block-text-tittle">	<!-- tittle of description -->
					<?=$arItem['NAME'];?>
					<br>
				</span>
				<span class="page-menu-block-text-date">	<!-- date of description -->
					<?=$arItem['ACTIVE_FROM'];?>
					<br>
				</span>
				<span class="page-menu-block-text-description">	<!-- text of news -->
					<?=$arItem['PREVIEW_TEXT'];?>	
				<br>
				</span>
			</div>
	</div>
<?php endforeach; ?>

<?=$arResult['NAV_STRING']?>