<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CartypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cartypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartype-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cartype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_type_id',
            'car_type_name',
            'car_type_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
