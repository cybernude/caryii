<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Syn */

$this->title = 'Update Syn: ' . ' ' . $model->syn_id;
$this->params['breadcrumbs'][] = ['label' => 'Syns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->syn_id, 'url' => ['view', 'id' => $model->syn_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="syn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
