<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
<nav>
    <ul class="header__nav">
    <?
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        if (mb_strtolower($arItem["TEXT"]) == 'проекты' || mb_strtolower($arItem["TEXT"]) == 'о нас'):?>
            <li class="header__nav-item header__nav-item_paragraph">
                <div class="header__nav-point">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <img class="arrow" src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg">
                </div>
               
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "500na700-subheader",
                    array(
                        "ROOT_MENU_TYPE" => mb_strtolower($arItem["TEXT"]) == 'проекты' ? 'project' : 'about',  // Тип меню (то, что вы создали)
                        "MAX_LEVEL" => "1",          // Максимальный уровень вложенности
                        "CHILD_MENU_TYPE" => "submenu", // Тип меню для вложенных пунктов
                        "USE_EXT" => "Y",            // Подключать файлы .menu_ext.php
                        "DELAY" => "N",              // Откладывать выполнение компонента
                        "ALLOW_MULTI_SELECT" => "N", // Разрешить несколько активных пунктов одновременно
                        "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                        "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => array( // Дополнительные переменные, влияющие на кеширование
                        ),
                        "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                    ),
                    false
                );?>
        <?else:?>
            <li class="header__nav-item <?if($arItem["SELECTED"]) {echo 'selected'; } ?>">
                <a class="link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <?endif; ?>
        </li>
    <?endforeach?>
    
    </ul>
</nav>
<?endif?>