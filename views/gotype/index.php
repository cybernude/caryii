<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GotypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Go Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="go-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Go Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'go_id',
            'go_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
