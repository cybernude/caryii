<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carbook */

$this->title = 'Create Carbook';
$this->params['breadcrumbs'][] = ['label' => 'Carbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
