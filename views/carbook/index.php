<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarbookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carbook-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'car_book_id',
            'request_date',
            //'car_id',
            'car_type_id',
            'subject',
             'description:ntext',
             'startdatetime',
            // 'enddatetime',
            // 'staff',
            // 'approve_id',
            // 'approve',
            // 'approve_date',
             'driver_id',
            // 'realstartdatetime',
            // 'realenddatetime',
            // 'milestart',
            // 'mileend',
            // 'booking_id',
            // 'go_id',
            // 'booking',
            // 'cancel',
            // 'shift_id',
            // 'syn_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
