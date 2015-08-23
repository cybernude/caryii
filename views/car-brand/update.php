<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CarBrand */

$this->title = 'Update Car Brand: ' . ' ' . $model->car_brand_id;
$this->params['breadcrumbs'][] = ['label' => 'Car Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_brand_id, 'url' => ['view', 'id' => $model->car_brand_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
