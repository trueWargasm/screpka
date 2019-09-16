<div class="container" >
    <div class="row">
        <div class="column">
            <div class="welcome-title">
                <h2>Выбирите тип застойки!</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 bld_choose" >
            <img src="/img/blds/selfbuild.jpg"/>
            <a class="button" href="/build/custom">Самостоятельная</a>
        </div>
        <div class="column column-50 bld_choose">
            <img src="/img/blds/standartbuild.jpg"/>
            <form action="./build" method="post">
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <div class="row">
                    <div class="column column-50" ><input class="wl-input" type="text" name="width" placeholder="Ширина"/></div>
                    <div class="column column-50" ><input class="wl-input" type="text" name="length" placeholder="Длина"/></div>
                </div>
                <input class="button"  type="submit" value="Стандартная"/>
            </form>

        </div>
    </div>

</div>
