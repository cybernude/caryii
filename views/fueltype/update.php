<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FuelType */

$this->title = 'Update Fuel Type: ' . ' ' . $model->fuel_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Fuel Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fuel_type_id, 'url' => ['view', 'id' => $model->fuel_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fuel-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
