<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carpriority */

$this->title = 'Update Carpriority: ' . ' ' . $model->car_priority_id;
$this->params['breadcrumbs'][] = ['label' => 'Carpriorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_priority_id, 'url' => ['view', 'id' => $model->car_priority_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carpriority-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
