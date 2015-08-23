<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FueltypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fuel Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuel-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fuel Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fuel_type_id',
            'fuel_type_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
