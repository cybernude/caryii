<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'car_id') ?>

    <?= $form->field($model, 'car_type_id') ?>

    <?= $form->field($model, 'car_register') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'startdatetime') ?>

    <?php // echo $form->field($model, 'car_brand_id') ?>

    <?php // echo $form->field($model, 'car_model') ?>

    <?php // echo $form->field($model, 'number_engine') ?>

    <?php // echo $form->field($model, 'number_tank') ?>

    <?php // echo $form->field($model, 'start_mile') ?>

    <?php // echo $form->field($model, 'max_fuel') ?>

    <?php // echo $form->field($model, 'usage_mile') ?>

    <?php // echo $form->field($model, 'repair_price') ?>

    <?php // echo $form->field($model, 'driver_id') ?>

    <?php // echo $form->field($model, 'event_color') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
