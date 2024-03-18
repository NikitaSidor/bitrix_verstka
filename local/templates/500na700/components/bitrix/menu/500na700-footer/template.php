<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav>
    <ul class="footer__nav">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
        <li class="footer__nav-item"><a class="link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>
    </ul>
</nav>
<?endif?>