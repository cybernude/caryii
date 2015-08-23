<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarprioritySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carpriorities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carpriority-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carpriority', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_priority_id',
            'car_priority_name',
            'car_priority_admin',
            'car_priority_approve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
