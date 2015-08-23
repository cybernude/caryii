<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoType */

$this->title = 'Update Go Type: ' . ' ' . $model->go_id;
$this->params['breadcrumbs'][] = ['label' => 'Go Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->go_id, 'url' => ['view', 'id' => $model->go_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="go-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
