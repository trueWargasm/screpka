<?php
use yii\helpers\Html;
?>

<div class="container" >
    <div class="row">
        <div class="column">
            <div class="welcome-title">
                <h2>Самостоятельная застройка</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <form action="/build/custom" method="post">
                <?php echo Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []); ?>
                <fieldset>
                    <label for="power">Электричество</label>
                    <input name="power" type="radio" value="5">5 КВт.
                    <input name="power" type="radio" value="10">10 КВт.
                    <input name="power" type="radio" value="20">20 КВт.
                    <input name="power" type="radio" value="60">60 КВт.
                </fieldset>
                <fieldset>
                    <label for="water">Вода</label>
                    <input type="hidden"  name="hotWater" value="0"/>
                    <input type="hidden"  name="coldWater" value="0"/>
                    <input type="checkbox"  name="hotWater" value="1"/>Горячая
                    <input type="checkbox"  name="coldWater" value="1">Холодная
                </fieldset>
                <fieldset>
                    <input class="button" type="submit" value="Отправить">
                </fieldset>
            </form>
        </div>
    </div>
</div>