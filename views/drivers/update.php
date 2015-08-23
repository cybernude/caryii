<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Drivers */

$this->title = 'Update Drivers: ' . ' ' . $model->driver_id;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->driver_id, 'url' => ['view', 'id' => $model->driver_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drivers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
