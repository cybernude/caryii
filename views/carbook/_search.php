<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarbookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'car_book_id') ?>

    <?= $form->field($model, 'request_date') ?>

    <?= $form->field($model, 'car_id') ?>

    <?= $form->field($model, 'car_type_id') ?>

    <?= $form->field($model, 'subject') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'startdatetime') ?>

    <?php // echo $form->field($model, 'enddatetime') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'approve_id') ?>

    <?php // echo $form->field($model, 'approve') ?>

    <?php // echo $form->field($model, 'approve_date') ?>

    <?php // echo $form->field($model, 'driver_id') ?>

    <?php // echo $form->field($model, 'realstartdatetime') ?>

    <?php // echo $form->field($model, 'realenddatetime') ?>

    <?php // echo $form->field($model, 'milestart') ?>

    <?php // echo $form->field($model, 'mileend') ?>

    <?php // echo $form->field($model, 'booking_id') ?>

    <?php // echo $form->field($model, 'go_id') ?>

    <?php // echo $form->field($model, 'booking') ?>

    <?php // echo $form->field($model, 'cancel') ?>

    <?php // echo $form->field($model, 'shift_id') ?>

    <?php // echo $form->field($model, 'syn_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
