<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); //вызываем виджет Формы. Открывающий тег?>
<?= $form->field($model, 'name'); // input name?>
<?= $form->field($model, 'email'); // input email?>
<div class="form-group">
    <?= Html::submitButton('Отправить',['class'=>'btn btn-primary']); ?>
</div>
<?php $form = ActiveForm::end();?>

