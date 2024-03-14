<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>


    <div class="wrapper">
            <section class="faq" id="faq">
                <h1 class="section-title">FAQ</h1>
                <div class="accordion-list">
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__title">Какие услуги предоставляет ваша студия?</h2><img
                                    class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg">
                        </div>
                        <div class="accordion__body">
                            <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн,
                                отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно
                                совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__title">Как вы обеспечиваете качество и уникальность дизайна?</h2><img
                                    class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg">
                        </div>
                        <div class="accordion__body">
                            <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн,
                                отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно
                                совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion__header">
                            <h2 class="accordion__title">Предоставляете ли вы услуги по созданию контента для сайтов и
                                приложений?</h2><img class="accordion__arrow" src="<?=SITE_TEMPLATE_PATH?>/img/Arrow.svg">
                        </div>
                        <div class="accordion__body">
                            <p>Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн,
                                отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно
                                совершенствуют свои навыки и следят за новыми трендами в дизайне.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <div class="white-background">
            <div class="wrapper">
                <section class="subscribe" id="subscribe">
                    <div class="subscribe__description">
                        <h1 class="subscribe__title">Подпишись на рассылку</h1>
                        <p class="subscribe__subtitle">Отправляем анонсы новых статей, выпусков и трансляций</p>
                        <p class="message message_subscribe"></p>
                    </div>
                    <form class="subscribe__form">
                        <div class="subscribe__input-list"><input class="input_email" type="email"
                                                                  placeholder="Электронная почта" required> <input class="input_date" type="text"
                                                                                                                   placeholder="Дата (например, 01.01.1990)" required> <input class="input_phone"
                                                                                                                                                                              type="tel" placeholder="Телефон" required> <input class="input_time" type="text"
                                                                                                                                                                                                                                placeholder="Время (например, 10:00)" required></div>
                        <div class="checkbox checkbox_subscribe"><input type="checkbox" required> <label
                                    class="caption">Я согласен (-а) на обработку персональных данных</label></div><button
                                type="submit" class="button__contact-u s">Отправить</button>
                    </form>
                </section>
            </div>
        </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>