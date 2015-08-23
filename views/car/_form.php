<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use kartik\color\ColorInput;


/* @var $this yii\web\View */
/* @var $model app\models\Car */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_type_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\CarType::find()->all(),'car_type_id','car_type_name'),
        ['prompt'=>'เลือกประเภท']
    )
    ?>

    <?= $form->field($model, 'car_brand_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\CarBrand::find()->all(),'car_brand_id','brand_name'),
        ['prompt'=>'เลือกยี่ห้อ']
    )
    ?>

    <?= $form->field($model, 'car_register')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startdatetime')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>


    <?= $form->field($model, 'car_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_engine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_tank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_mile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_fuel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_mile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repair_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Drivers::find()->all(),'driver_id','driver_name'),
        ['prompt'=>'เลือกผู้ดูแล']
    )
    ?>

    <?=
        $form->field($model, 'event_color')->widget(ColorInput::classname(), [
        'options' => ['placeholder' => 'เลือกสี ...'],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
