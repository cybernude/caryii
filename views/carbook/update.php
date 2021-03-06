<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carbook */

$this->title = 'Update Carbook: ' . ' ' . $model->car_book_id;
$this->params['breadcrumbs'][] = ['label' => 'Carbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_book_id, 'url' => ['view', 'id' => $model->car_book_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
