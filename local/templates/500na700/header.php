<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bundle.js');
    $APPLICATION->ShowHead();
    ?>
</head>

<body>

    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>
    <header>
        <div class="wrapper">
            <div class="header"><img class="header__logo" src="<?=SITE_TEMPLATE_PATH?>/img/Logo.svg">
                <div class="header__menu">
                    <nav>
                        <ul class="header__nav">
                            <li class="header__nav-item header__nav-item_paragraph">
                                <div class="header__nav-point"><a href="#">О нас</a> <img class="arrow"
                                                                                          src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg"></div>
                                <div class="header__links">
                                    <div class="header__links-wrapper"><a class="link">О 500на700</a> <a
                                            class="link">Документы</a> <a class="link">Устойчивое развитие</a> <a
                                            class="link">Команда</a> <a class="link">Стратегия</a></div>
                                </div>
                            </li>
                            <li class="header__nav-item header__nav-item_paragraph">
                                <div class="header__nav-point"><a href="#projects">Проекты</a> <img class="arrow"
                                                                                                    src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg"></div>
                                <div class="header__links">
                                    <div class="header__links-wrapper"><a class="link">О 500на700</a> <a
                                            class="link">Документы</a> <a class="link">Устойчивое развитие</a> <a
                                            class="link">Команда</a> <a class="link">Стратегия</a></div>
                                </div>
                            </li>
                            <li class="header__nav-item"><a class="link" href="#news">Новости</a></li>
                            <li class="header__nav-item"><a class="link" href="#faq">FAQ</a></li>
                            <li class="header__nav-item"><a class="link" href="#subscribe">Контакты</a></li>
                        </ul>
                    </nav><button class="button_white button_open-modal">Связаться с нами</button>
                </div>
                <div class="burger burger_main"></div>
            </div>
        </div>
    </header>
    <div class="modal">
        <form class="contact-us">
            <div class="burger burger_active burger_contact-us"></div>
            <h2 class="contact-us__title">Связаться с нами</h2>
            <p class="message message_contact-us"></p><input class="contact-us__input" type="text" placeholder="Имя"
                                                             required> <input class="contact-us__input input_phone" type="tel" placeholder="Телефон" required>
            <div class="checkbox checkbox_contact-us"><input type="checkbox" required> <label class="caption">Я согласен
                    (-а) на обработку персональных данных</label></div><button type="submit"
                                                                               class="button__contact-us">Отправить</button>
        </form>
    </div>

    <main>