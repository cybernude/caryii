<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CarBook */

$this->title = 'แบบฟอร์มขอใช้รถยนต์ส่วนกลาง';
$this->params['breadcrumbs'][] = ['label' => 'ขอใช้รถยนต์ส่วนกลาง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
