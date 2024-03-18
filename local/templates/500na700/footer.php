<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</main>
    <footer>
        <div class="wrapper">
            <div class="footer">
                <div class="footer__sources"><img class="footer__logo" src="<?=SITE_TEMPLATE_PATH?>/img/whiteLogo.svg">
                    <div class="footer__icon-list">
                        <a class="footer__icon" href="https://www.youtube.com/"><img
                                    src="<?=SITE_TEMPLATE_PATH?>/img/youtube.svg"></a>
                        <a class="footer__icon" href="https://web.telegram.org"><img
                                    src="<?=SITE_TEMPLATE_PATH?>/img/telegram.svg"></a>
                        <a class="footer__icon" href="https://vk.com"><img
                                    src="<?=SITE_TEMPLATE_PATH?>/img/vk.svg"></a>
                    </div>
                </div>
                
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "500na700-footer",
                    array(
                        "ROOT_MENU_TYPE" => "foote",  // Тип меню (то, что вы создали)
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
                <div class="footer__info"><a>г. Горгород,<br>ул. Мегаполисная, 1</a> <a class="link"
                                                                                        href="tel:+70000000000">+7 (000) 000-00-00</a> <a class="link"
                                                                                                                                          href="mailto:john@example.com">email@email.ru</a></div>
            </div>
        </div>
    </footer>
</body>

</html>