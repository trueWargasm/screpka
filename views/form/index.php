<?php
use yii\helpers\Html;
?>
<div class="container">
    <div class="row">
        <div class="column">
            <div class="welcome-title">
                <h1>Здравствуйте!</h1>
                <h4>Вы находитесь в разделе выбора услуг, пожалуйста заполните форму!</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 form-column-50">
            <form action="/form" method="post">
                <?php echo Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []); ?>
                <fieldset>
                    <label for="company">Компания</label>
                    <input name="cmpny" required="required" type="text" placeholder="Компания" id="company">

                    <label for="hole">Зал</label>
                    <input name="hall" required="required" type="text" placeholder="Зал №" id="hole">

                    <label for="stand">Стенд</label>
                    <input name="stand"  required="required" type="text" placeholder="Стенд" id="stand">

                    <label   for="width">Ширина</label>
                    <input name="width" required="required" type="text" placeholder="Ширина" id="width">

                    <label for="length">Длинна</label>
                    <input name="length" required="required" type="text" placeholder="Длинна" id="length">
                    <label for="Фамилия Имя Отчество">ФИО</label>
                    <input name="fio" required="required" type="text" placeholder="Фамилия Имя Отчество" id="fio">
                    <label for="email">Почта</label>
                    <input name="email" required="required" type="text" placeholder="Почта" id="email">

                    <input class="button" type="submit" value="Отправить">
                </fieldset>
            </form>
        </div>
    </div>
</div>