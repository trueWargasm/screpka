<?php /* @var $this yii\web\View */
use yii\helpers\Html;
?>

<script>
    //Площадь
    var sqr = <?=$sqr?>;
</script>
<div class="container">
    <div class="row">
        <div class="column">
            <div class="welcome-title">
                <h1>Дополнительные услуги</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div id="steps">
                <div class="step-app">
                    <div>
                        <ul class="step-steps">
                            <li class="step-item">Уборка</li>
                            <li class="step-item">Пропуск к монтажным воротам</li>
                            <li class="step-item">VIP парковка</li>
                            <li class="step-item">Наружная реклама</li>
                            <li class="step-item">Оборудование для конференций, ПРОЕКТОР</li>
                            <li class="step-item">Оборудование для конференций, АУДИО</li>
                            <li class="step-item">Конференц зал</li>
                            <li class="step-item">Радио объявления</li>
                            <li class="step-item">Интернет на стенде</li>
                        </ul>
                        <div class="step-footer">
                            <p class="total-price">Стоимость дополнительных услуг:<span id="add_service">0</span> р.</p>
                            <button class="btn prev visible" data-direction="prev">Назад</button>
                            <button class="btn next visible" data-direction="next">Далее</button>
                            <button class="btn finish" data-direction="finish">Отправить</button>
                        </div>
                    </div>
                    <div class="step-content">
                        <form action="/service" method="post" id="form">
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <div class="step-fieldset">
                                <div class="step-tab-panel" id="step1">
                                    <label>Уборка</label>
                                    <div class="step-disclaimer">
                                        Стоимость уборки 125р за квадратный метр полощади.
                                    </div>
                                    <fieldset>
                                        <input class="cleanup-check" name="cleanup[]" type="checkbox" value="1"/>Первый день
                                    </fieldset>
                                    <fieldset>
                                        <input class="cleanup-check" name="cleanup[]" type="checkbox" value="2" />Второй день
                                    </fieldset>
                                    <fieldset>
                                        <input class="cleanup-check" name="cleanup[]" type="checkbox" value="3" />Третий день
                                    </fieldset>
                                    <fieldset>
                                        <input id="cleanup-discard" name="cleanup[]" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step2">
                                    <label>Пропуск к монтажным воротам</label>
                                    <div class="step-disclaimer">
                                        <p>ВНИМАНИЕ: подъезд в зону погрузо-разгрузочных работ МВЦ «Крокус Экспо» платный</p>
                                        <p>Время нахождения транспорта в зоне составляет 1 час.</p>
                                        <p>Превышение временного интервала  облагается штрафом.</p>
                                    </div>
                                    <fieldset>
                                        Легковые (2700 р.) <input name="pass[car]" type="text" class="step-tab-input pass-to-gates" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        Грузовые (5700 р.)<input name="pass[van]" type="text" class="step-tab-input pass-to-gates" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        <input id="pass-to-gates-discard" name="pass[]" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step3">
                                    <label>VIP парковка</label>
                                    <div class="step-disclaimer">
                                        <p>Стоянка VIP.Перед павильоном.Для легковых автомобилей 10000 р.</p>
                                        <p>Вниамние! Автомобили на VIP стоянке не должны сожержать рекламных надписей или логотипов компании!</p>
                                        <p>Администрация Выставочного центра вправе отказать в VIP парковке в случае нарушения данного условия</p>
                                    </div>
                                    <fieldset>
                                        Количество мест <input name="vip" type="text" class="step-tab-input vip-parking" />.
                                    </fieldset>
                                    <fieldset>
                                        <input id="vip-parking-discard" name="vip" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step4">
                                    <label>Наружняя реклама</label>
                                    <fieldset>
                                        конструкция размером  1,0 х 2.8 м (11700 р.)
                                        <input name="banner[10x28]" data-sqr="28000" data-price="11700" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  2,0 х 2.0 м (15500 р.)
                                        <input name="banner[20x20]" data-sqr="40000" data-price="15500" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  2,2 х 2.5 м (18000 р.)
                                        <input name="banner[22x25]" data-sqr="55000" data-price="18000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  4,5 х 2.5 м (25000 р.)
                                        <input name="banner[45x25]" data-sqr="112500" data-price="25000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  6,7 х 2.5 м (29000 р.)
                                        <input name="banner[67x25]" data-sqr="167500" data-price="29000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        <input id="advert-banners-print" name="banner[print]" type="checkbox" value="1" class="advert-banners"/>печать рекламного полотна за 1 кв.m. (750р.)
                                    </fieldset>
                                    <fieldset>
                                        <input id="advert-banners-discard" name="banner" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step5">
                                    <label>Конференц зал</label>
                                    <fieldset>
                                        <input type="hidden" name="conference-hall" value="no"/>
                                        <input id="conference-hall" name="conference-hall" type="checkbox" value="yes" />Хочу провести конференцию, нужен Конференц зал
                                    </fieldset>
                                    <fieldset>
                                        <input id="conference-hall-discard" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step6">
                                    <label>Радио объявления</label>
                                    <fieldset>
                                        Радио объявления (750 руб.) <input type="text" name="radio-ads-count" class="step-tab-input radio-ads" />  шт.
                                    </fieldset>
                                    <fieldset>
                                        Текст объявления <input type="text" name="radio-ads-text" class="step-tab-input radio-ads" style="width: 500px"/>
                                    </fieldset>
                                    <fieldset>
                                        Желаемое расписание <input type="text" name="radio-ads-sched" class="step-tab-input radio-ads" style="width: 500px"/>
                                    </fieldset>
                                    <fieldset>
                                        <input id="radio-ads-discard" name="radio-ads" type="checkbox" value="no" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step7">
                                    <label>Реклама на сайте</label>
                                    <fieldset>
                                        <input type="radio" value="1" name="site-ads-type" class="site-ads"/> Пригласительный билет
                                    </fieldset>
                                    <fieldset>
                                        <input type="radio" value="2" name="site-ads-type" class="site-ads"/> Заявка на участие в выставке
                                    </fieldset>
                                    <fieldset>
                                        <input type="radio" value="3" name="site-ads-type" class="site-ads"/> Список участников
                                    </fieldset>
                                    <fieldset>
                                        <input type="radio" value="4" name="site-ads-type" class="site-ads"/> Страница новостей
                                    </fieldset>
                                    <fieldset>
                                        <input type="radio" value="5" name="site-ads-type" class="site-ads"/> Отдельная новость
                                    </fieldset>
                                    <fieldset>
                                        <input id="site-ads-discard" name="site-ads" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                    <fieldset style="display: none" id="site-ads-info-1" class="site-ads-info">
                                        <p id="ads-info">
                                            Самая поceщаемая страница на сайте «Скрепка Экспо».<br/>
                                            Более 15 тыс. посещений в период с сентября по март 2017 года!<br/>
                                            Актуальное размещение: с 1 сентября по 14 марта.<br/>
                                            Стоимость: 25 000 в мес. / 140 000 руб. за сезон
                                        </p>
                                        <img id="ads-image" src="/img/ads/noroot1.png" />
                                    </fieldset>
                                    <fieldset style="display: none" id="site-ads-info-2" class="site-ads-info">
                                        <p id="ads-info">
                                            На этой странице компании оформляют заявку на участие в выставке «Скрепка Экспо».<br/>
                                            Вы создаете выставочные стенды или готовы предложить экспонентам персонал на выставку?<br/>
                                            А может Вы занимаетесь изготовлением полиграфической и сувенирной продукции? Тогда эта страница идеально подойдет для размещения Ваших услуг!<br/>
                                            Актуальное размещение: с 1 апреля по 15 марта след года.<br/>
                                            Стоимость: 10 000 руб./ мес., 50 000 руб./ ½ года , 100 000 руб. /год<br/>
                                        </p>
                                        <img id="ads-image" src="/img/ads/noroot2.png" />
                                    </fieldset>
                                    <fieldset style="display: none" id="site-ads-info-3" class="site-ads-info">
                                        <p id="ads-info">
                                            В международной выставке «Скрепка Экспо» принимают участие более двухсот компаний.<br/>
                                            Вы одни из них? Разместите на данной странице свой баннер, и гости выставки обязательно посетят ваш стенд!<br/>
                                            Актуальное размещение: с 1 июня по 15 марта след года.<br/>
                                            Стоимость размещения: 18 000 р./ мес., ½ года/ 95 000 руб., 1 год / 170 000 руб.<br/>
                                        </p>
                                        <img id="ads-image" src="/img/ads/noroot3.png" />
                                    </fieldset>
                                    <fieldset style="display: none" id="site-ads-info-4" class="site-ads-info">
                                        <p id="ads-info">
                                            Универсальная страница для размещения Вашей рекламы.<br/>
                                            Страница обновляется актуальными новостями канцелярского рынка не менее двух раз в неделю, которые одинаково привлекают внимание как экспонентов, так и посетителей выставки.<br/>
                                            Разместите здесь свой баннер, и ваша реклама попадет точно в цель!<br/>
                                            Актуальное размещение: весь год.<br/>
                                            Стоимость размещения: 18 000 р./ мес., ½ года/ 95 000 руб., 1 год / 170 000 руб.<br/>
                                        </p>
                                        <img id="ads-image" src="/img/ads/noroot4.png" />
                                    </fieldset>
                                    <fieldset style="display: none" id="site-ads-info-5" class="site-ads-info">
                                        <p id="ads-info">
                                            При размещения баннера на данной странице, ваша реклама будет отображена в каждой новостной публикации.<br/>
                                            Ссылка на каждый пост включается в ежемесячную рассылку, размещается на более чем 20-и крупнейших выставочных и канцелярских медиаресурсах, а также в социальных сетях выставки «Скрепка Экспо».<br/>
                                            Актуальное размещение: весь год<br/>
                                            Стоимость: 10 000 руб. — 1 мес., 50 000 руб. — ½ года, 100 000 руб. — год<br/>
                                        </p>
                                        <img id="ads-image" src="/img/ads/noroot5.png" />
                                    </fieldset>

                                </div>
                                <div class="step-tab-panel" id="step8">
                                    <label>Интернет на стенде</label>
                                    <fieldset>
                                        <input type="hidden" name="internet" value="no" />
                                        <input type="checkbox" name="internet" value="yes" />Интернет на стенде
                                    </fieldset>
                                    <fieldset>
                                        <input name="internet[whire]" data-price="25000" value="0" type="text" class="step-tab-input internet-type" /> Проводной интернет (скорость до 4 м/бит в сек)
                                    </fieldset>
                                    <fieldset>
                                        <input name="internet[wifi]" data-price="4000" value="0" type="text" class="step-tab-input internet-type" /> WI-FI (скорость до 1 мбит в сек.)
                                    </fieldset>
                                    <fieldset>
                                        <input id="internet-discard" type="checkbox"/>Отказываюсь от услуги
                                    </fieldset>
                                </div>
                    </div>
                    </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
