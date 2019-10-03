<?php
/* @var $this yii\web\View */

use yii\web\View; ?>
<script>
    var cwidth = <?=$phpWidth?>;
    var clength = <?=$phpLength?>;
</script>

<h1>Проверка заказа</h1>

<div class="title-canvas">Застройка</div>
<div id="dragBoard" class="dragBoard">
    <canvas id="canvas" class="canvas"></canvas>
</div>
<ol>
<?php FOREACH($servises as $servise => $data ): ?>
    <li>
        <?=$servise?>
    </li>
<?php ENDFOREACH; ?>
</ol>