<?php
use yii\helpers\Html;
?>
<p>
    Вы ввели следующие данные:
</p>
<ul>
    <li><label for="name">Name: </label> <? =Html::encode($model->'name')?></li>
    <li><label for="email">Email: </label> <? =Html::encode($model->'email')?> </li>
</ul>
