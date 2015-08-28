<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carbook */

$this->title = $model->car_book_id;
$this->params['breadcrumbs'][] = ['label' => 'Carbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->car_book_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->car_book_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'car_book_id',
            'request_date',
            //'car_id',
            'carType.car_type_name',
            'subject',
            'description:ntext',
            'startdatetime',
            'enddatetime',
            //'staff',
            'approve_id',
            //'approve',
            'approve_date',
            'driver_id',
            'realstartdatetime',
            'realenddatetime',
            'milestart',
            'mileend',
            'booking_id',
            'go_id',
            'booking',
            'cancel',
            'shift_id',
            'syn_id',
            'carBookPassengers.car_book_id',
        ],
    ]) ?>

</div>
