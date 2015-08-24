<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Syn */

$this->title = 'Create Syn';
$this->params['breadcrumbs'][] = ['label' => 'Syns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="syn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
