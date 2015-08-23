<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GoType */

$this->title = 'Create Go Type';
$this->params['breadcrumbs'][] = ['label' => 'Go Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="go-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
