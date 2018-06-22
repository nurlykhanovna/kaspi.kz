<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>
<?php= $form ->field($model,'name');?>
<?php= $form ->field($model,'email');?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>