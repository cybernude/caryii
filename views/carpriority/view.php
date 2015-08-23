<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carpriority */

$this->title = $model->car_priority_id;
$this->params['breadcrumbs'][] = ['label' => 'Carpriorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carpriority-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->car_priority_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->car_priority_id], [
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
            'car_priority_id',
            'car_priority_name',
            'car_priority_admin',
            'car_priority_approve',
        ],
    ]) ?>

</div>
