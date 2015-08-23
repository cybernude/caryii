<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\CarBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'request_date')->textInput() ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'car_id')->textInput() ?>

    <?= $form->field($model, 'car_type_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\carType::find()->all(),'car_type_id','car_type_name'),
        ['prompt'=>'เลือกรถ']
    )
    ?>



    <?//= $form->field($model, 'startdatetime')->textInput() ?>


    <?=
    $form->field($model, 'startdatetime')->widget(DateTimePicker::className(), [
        'options' => ['placeholder' => 'เลือกวันเดินทาง ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd HH:i:00',
            'startDate' => 'yyyy-mm-dd HH:i:s',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?=
    $form->field($model, 'enddatetime')->widget(DateTimePicker::className(), [
        'options' => ['placeholder' => 'เลือกวันกลับ ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd HH:i:00',
            'startDate' => 'yyyy-mm-dd HH:i:s',
            'todayHighlight' => true
        ]
    ]);
    ?>


    <?//= $form->field($model, 'enddatetime')->textInput() ?>

    <?//= $form->field($model, 'staff')->textInput() ?>

    <?//= $form->field($model, 'approve_id')->textInput() ?>

    <?//= $form->field($model, 'approve')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'approve_date')->textInput() ?>

    <?//= $form->field($model, 'driver_id')->textInput() ?>

    <?//= $form->field($model, 'realstartdatetime')->textInput() ?>

    <?//= $form->field($model, 'realenddatetime')->textInput() ?>

    <?//= $form->field($model, 'milestart')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'mileend')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'booking_id')->textInput() ?>

    <?//= $form->field($model, 'go_id')->textInput() ?>

    <?//= $form->field($model, 'booking')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'cancel')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'shift_id')->textInput() ?>

    <?//= $form->field($model, 'syn_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
