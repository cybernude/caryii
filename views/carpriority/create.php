<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carpriority */

$this->title = 'Create Carpriority';
$this->params['breadcrumbs'][] = ['label' => 'Carpriorities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carpriority-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
