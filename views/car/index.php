<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Car', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_id',
            'car_type_id',
            'car_register',
            'description',
            'startdatetime',
            // 'car_brand_id',
            // 'car_model',
            // 'number_engine',
            // 'number_tank',
            // 'start_mile',
            // 'max_fuel',
            // 'usage_mile',
            // 'repair_price',
            // 'driver_id',
            // 'event_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
