<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CarBook */

$this->title = $model->car_book_id;
$this->params['breadcrumbs'][] = ['label' => 'Car Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-book-view">

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
            'car_id',
            'subject',
            'description:ntext',
            'startdatetime',
            'enddatetime',
            'staff',
            'approve_id',
            'approve',
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
        ],
    ]) ?>

</div>
