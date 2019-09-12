<?php /* @var $this yii\web\View */ ?>

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
                            <li><a href="#step1">Уборка</a></li>
                            <li><a href="#step2">Пропуск к монтажным воротам</a></li>
                            <li><a href="#step3">VIP парковка</a></li>
                            <li><a href="#step4">Наружная реклама</a></li>
                            <li><a href="#step5">Оборудование для конференций, ПРОЕКТОР</a></li>
                            <li><a href="#step6">Оборудование для конференций, АУДИО</a></li>
                            <li><a href="#step7">Конференц зал</a></li>
                            <li><a href="#step8">Радио объявления</a></li>
                            <li><a href="#step9">Интернет на стенде</a></li>
                        </ul>
                        <div class="step-footer">
                            <p class="total-price">Стоимость дополнительных услуг:<span id="add_service">0</span> р.</p>
                            <button data-direction="prev" class="step-btn">Назад</button>
                            <button data-direction="next" class="step-btn">Далее</button>
                            <button data-direction="finish" class="step-btn">Отправить</button>
                        </div>
                    </div>
                    <div class="step-content">
                        <form action="">
                            <fieldset class="step-fieldset">
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
                                    <!-- Параметр для залочивания шага пока не выбран хотябы один пункт -->
                                    <input type="hidden" id="step1-set" value="0"/>
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
                                    <!-- Параметр для залочивания шага пока не выбран хотябы один пункт -->
                                    <input type="hidden" id="step2-set" value="0"/>
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
                                    <!-- Параметр для залочивания шага пока не выбран хотябы один пункт -->
                                    <input type="hidden" id="step3-set" value="0"/>
                                </div>
                                <div class="step-tab-panel" id="step4">
                                    <fieldset>
                                        конструкция размером  1,0 х 2.8 м (11700 р.)
                                        <input name="banner[28000]" data-sqr="28000" data-price="11700" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  2,0 х 2.0 м (15500 р.)
                                        <input name="banner[40000]" data-sqr="40000" data-price="15500" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  2,2 х 2.5 м (18000 р.)
                                        <input name="banner[55000]" data-sqr="55000" data-price="18000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  4,5 х 2.5 м (25000 р.)
                                        <input name="banner[112500]" data-sqr="112500" data-price="25000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        конструкция размером  6,7 х 2.5 м (29000 р.)
                                        <input name="banner[167500]" data-sqr="167500" data-price="29000" value="0" type="text" class="step-tab-input advert-banners" /> шт.
                                    </fieldset>
                                    <fieldset>
                                        <input id="advert-banners-print" name="banner[print]" type="checkbox" value="1" class="advert-banners"/>печать рекламного полотна за 1 кв.m. (750р.)
                                    </fieldset>
                                    <fieldset>
                                        <input id="advert-banners-discard" name="banner" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                    <!-- Параметр для залочивания шага пока не выбран хотябы один пункт -->
                                    <input type="hidden" id="step4-set" value="0"/>
                                </div>
                                <div class="step-tab-panel" id="step5">
                                    <fieldset>
                                        <input type="hidden" name="conference-hall" value="no"/>
                                        <input id="conference-hall" name="conference-hall" type="checkbox" value="yes" />Хочу провести конференцию, нужен Конференц зал
                                    </fieldset></div>
                                    <fieldset>
                                        <input id="conference-hall-discard" name="banner" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                <div class="step-tab-panel" id="step6">
                                    <fieldset>
                                        Радио объявления (750 руб.) <input type="text" name="radio-ads-count" class="step-tab-input radio-ads" />  шт.
                                    </fieldset>
                                    <fieldset>
                                        Текст объявления <input type="text" name="radio-ads-text" class="step-tab-input radio-ads" width="80%"/>  шт.
                                    </fieldset>
                                    <fieldset>
                                        <input id="radio-ads-discard" name="banner" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step6">
                                    <fieldset>
                                        Реклама на сайте <input type="text" name="radio-ads-count" class="step-tab-input radio-ads" />  шт.
                                    </fieldset>
                                    <fieldset>
                                        Текст объявления <input type="text" name="radio-ads-text" class="step-tab-input radio-ads" width="80%"/>  шт.
                                    </fieldset>
                                    <fieldset>
                                        <input id="radio-ads-discard" name="banner" type="checkbox" value="0" />Отказываюсь от услуги
                                    </fieldset>
                                </div>
                                <div class="step-tab-panel" id="step8">
                                    <fieldset>
                                        <input type="checkbox" />Интернет на стенде
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
