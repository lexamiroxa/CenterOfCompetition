<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->createFrame()->begin("Загрузка навигации");
?>

<?if($arResult["NavPageCount"] > 1):?>

    <?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
        <?
            $plus = $arResult["NavPageNomer"]+1;
            $url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;

        ?>

        <!--<div class="load_more" data-url="<?=$url?>">
            Показать еще
        </div>-->

        <div class="news-button load_more" data-url="<?=$url?>"> 	<!-- bottom to show more partner -->
			<button type="button" class="btn btn-outline-success"> Еще  </button>
		</div>

    <?else:?>

        <div class="news-button load_more">
            Загружено все
        </div>

    <?endif?>

<?endif?>