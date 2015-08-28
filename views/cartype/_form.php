<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model app\models\Cartype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cartype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_type_name')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'car_type_color')->widget(ColorInput::classname(), [
        'options' => ['placeholder' => 'เลือกสี ...'],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
