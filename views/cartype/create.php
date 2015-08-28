<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cartype */

$this->title = 'Create Cartype';
$this->params['breadcrumbs'][] = ['label' => 'Cartypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
