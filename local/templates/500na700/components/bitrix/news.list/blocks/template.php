<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

?>
<section class="news slider" id="news">
    <h1 class="section-title">Новости</h1>
    <div class="news__list">
        
        <?foreach ($arResult['ITEMS'] as $arItem):?>
        <div class="slide slide_news">
            <div class="news__img">
                <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                <?php elseif (!empty($arItem['DETAIL_PICTURE']['SRC'])): ?>
                    <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
                <?php else: ?>
                    <!-- Здесь вы можете добавить вашу заглушку, например: -->
                    <img src="//affdskbmdo.cloudimg.io/v7/_stockcars_/7/JER1001_106210_1.jpg">
                <?php endif; ?>
            </div>
            <h2 class="news__title"><?=$arItem['NAME']?></h2>
            <p class="news__subtitle"><?=$arResult['PREVIEW_TEXT']?></p>
            <p class="news__date"><?=$arItem['ACTIVE_FROM']?></p>
        </div>
        <?endforeach;?>
    </div>
    <div class="slider__arrows slider__arrows_news"><img
            class="slider__arrow-previous slider__arrow-previous_news" src="<?=SITE_TEMPLATE_PATH?>/img/SliderArrow.svg"> <img
            class="slider__arrow-next slider__arrow-next_news" src="<?=SITE_TEMPLATE_PATH?>/img/SliderArrow.svg"></div>
</section>