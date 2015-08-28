<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cartype */

$this->title = $model->car_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Cartypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartype-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->car_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->car_type_id], [
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
            'car_type_id',
            'car_type_name',
            'car_type_color',
        ],
    ]) ?>

</div>
