<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carpriority */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carpriority-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_priority_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_priority_admin')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'car_priority_approve')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
