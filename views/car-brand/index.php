<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarBrandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-brand-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Car Brand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_brand_id',
            'brand_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
