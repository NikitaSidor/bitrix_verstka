<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

?>
<section class="projects slider" id="projects">
    <div class="slider__arrows slider__arrows_projects"><img
            class="slider__arrow-previous slider__arrow-previous_projects" src="<?=SITE_TEMPLATE_PATH?>/img/SliderArrow.svg"> <img
            class="slider__arrow-next slider__arrow-next_projects" src="<?=SITE_TEMPLATE_PATH?>/img/SliderArrow.svg"></div>
    <div class="projects-list">
        
        <?
        $active = true;
        foreach ($arResult['ITEMS'] as $arItem):?>
        <div class="slide slide_projects <?=$active ? 'slide_active' : ''; $active = false?>">
            <div class="projects__description">
                <span class="projects__tag caption"><?=$arItem['DISPLAY_PROPERTIES']['TAG']['VALUE']?></span>
                <h1 class="projects__title"><?=$arItem['NAME']?></h1>
                <p class="projects__subtitle"><?=$arItem['PREVIEW_TEXT']?>
                            </p>
            </div>
            <div class="projects__img">
                <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                <?php elseif (!empty($arItem['DETAIL_PICTURE']['SRC'])): ?>
                    <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
                <?php endif; ?>
            </div>
        </div>
        <?endforeach;?>
    </div>
</section>