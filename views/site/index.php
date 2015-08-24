<?php

/* @var $this yii\web\View */

$this->title = 'ระบบสำนักงาน โรงพยาบาลเขื่องใน';
?>

<?= \yii2fullcalendar\yii2fullcalendar::widget(array(
    'events' => $events,
)) ;
?>
